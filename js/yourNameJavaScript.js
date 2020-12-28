
       function validateform() {
        if (document.formRegister.mobile.value.length < 10 || document.formRegister.mobile.value.length > 10 ) {
            setErrorMsg(mobile, 'Customer Id must be 10 Numbers');
            document.formRegister.mobile.focus();
            return false;
        }
        else if (document.formRegister.password.value.length < 4) {
            setErrorMsg(password, 'Pin must 4 numbers');
            document.formRegister.password.focus();
            return false;
        }
        else{
            return true;
        }
    }

        function validatelogin() {
            if (document.loginForm.email.value.length < 10) {
                setErrorMsg(email, 'Customer Id can not be less than 10 Numbers');
                document.loginForm.email.focus();
                return false;
            }
            
            else if (document.loginForm.password.value.length < 4) {
                setErrorMsg(password, 'Pin can not be less than 4 character');
                document.loginForm.password.focus();
                return false;
            }
            else{
                return true;
            }
        }
        
            function setErrorMsg(input, errormsg){
            const formControl = input.parentElement;
            const small = formControl.querySelector('small')
            formControl.className = "is-invalid"
            small.innerText = errormsg;
        }
