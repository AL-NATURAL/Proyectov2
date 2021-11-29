const iconEye1 = document.querySelector(".icon-eye-1");

               iconEye1.addEventListener("click", function () {
                
                   const icon = this.querySelector("i");

                   if(this.nextElementSibling.type == "password"){

                       this.nextElementSibling.type = "text";

                       icon.classList.remove("fa-eye");

                       icon.classList.add("fa-eye-slash");

                   }else{

                       this.nextElementSibling.type = "password";

                       icon.classList.remove("fa-eye-slash");

                       icon.classList.add("fa-eye");

                   }
});
/*
const iconEye1 = document.querySelector(".icon-eye-1");
                
               iconEye1.addEventListener("click", function () {

                   const icon = this.querySelector("i");

                   if(this.nextElementSibling.type == "password"){

                       this.nextElementSibling.type = "text";

                       icon.classList.remove("fa-eye");

                       icon.classList.add("fa-eye-slash");

                   }else{

                       this.nextElementSibling.type = "password";

                       icon.classList.remove("fa-eye-slash");

                       icon.classList.add("fa-eye");

                   }
});*/