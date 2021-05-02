var register = {
    form: null,
    username: null,
    password: null,
    password_2: null,
    email: null,
    email_2: null,
    second_password: false,
    second_email: false,
    error: function(a, b, c, d) {
        c.css("border-color", a ? "red" : "green");
        if (d != undefined) d.css("border-color", a ? "red" : "green");
        (c.next("img").size() > 0 && c.next("img").hasClass("error_image") ? c.next("img") : $.createElement("img").addClass("error_image").css({
            width: "28px",
            height: "28px",
            margin: "5px 0px 0px 14px"
        }).insertAfter(c)).attr("src", siteurl + "images/" + (a ? "erreur" : "succes") + ".png");
        if (b.length > 0) error.insert(b,
            this.form, {
                error: a
            });
        else if (this.form.prev().size() > 0 && (this.form.prev().hasClass("error") || this.form.prev().hasClass("error_green"))) this.form.prev().hide()
    },
    check_username: function(a) {
        a.length < 3 || a.length > 25 ? this.error(true, lang.username_between, this.username) : $.post(siteurl + "profile.php?a=registration_ajax&ajax=username", {
            username: a
        }, function(b) {
            register.error(b.error, b.message, register.username)
        }, "json")
    },
    check_password: function(a) {
        if (a.length < 3) this.error(true, lang.password_short, this.password_2,
            this.password);
        else if (this.second_password) this.password.val() != this.password_2.val() ? this.error(true, lang.passwords_not_match, this.password_2, this.password) : this.error(false, "", this.password_2, this.password);
        else {
            this.password.css("border-color", "green");
            this.form.prev(".error").hide()
        }
    },
    check_email: function(a) {
        this.second_email && this.email.val() != this.email_2.val() ? this.error(true, lang.emails_not_match, this.email_2, this.email) : $.post(siteurl + "profile.php?a=registration_ajax&ajax=email", {
                email: a
            },
            function(b) {
                if (!register.second_email && !b.error) {
                    register.email.css("border-color", "green");
                    register.form.prev(".error").hide()
                } else register.error(b.error, b.message, register.email_2, register.email)
            }, "json")
    },
    submit: function() {
        if (register.form.find("input[name='agree']").is(":checked")) return true;
        else {
            error.insert(lang.agree, register.form);
            return false
        }
    },
    init: function() {
        image_verification.attach("image_verification");
        register.form = $("#reg_form").submit(this.submit);
        register.username = register.form.find("input[name='username']:first").blur(function() {
            register.check_username($(this).val())
        });
        register.password = register.form.find("input[name='password']:first").blur(function() {
            register.check_password($(this).val())
        });
        register.password_2 = register.form.find("input[name='password_2']:first").blur(function() {
            register.second_password = true;
            register.check_password($(this).val())
        });
        register.email = register.form.find("input[name='email']:first").blur(function() {
            register.check_email($(this).val())
        });
        register.email_2 = register.form.find("input[name='email_2']:first").blur(function() {
            register.second_email =
                true;
            register.check_email($(this).val())
        })
    }
};