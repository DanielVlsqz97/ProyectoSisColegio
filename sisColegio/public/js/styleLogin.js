document.getElementById('loginBtn').addEventListener('click',function(){
  if(validate('username')) {
    document.getElementById('username').classList.add('hide');
    document.getElementById('password').classList.add('show');
    document.getElementById('loginBtn').innerText = "Login";
    document.getElementById('loginBtn').addEventListener('click',function(){
      if(validate('password')) {
        document.getElementById('login-form').innerHTML = '<div class="loader"></div>';
      }
    });
  }
});

function validate(id){
  var val = document.getElementById(id).value;
  if(val.length > 3) {
    return true;
  }
  else  {
    return false;
  }
}
