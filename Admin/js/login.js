document.addEventListener('DOMContentLoaded',()=>{
  const id = document.getElementById('id');
  const pw = document.getElementById('pw');
  const btn = document.getElementById('btn_login')

  btn.addEventListener('click',(e)=>{
    e.preventDefault()

    if(id.value ==""){
      alert("아이디입력")
      id.focus()
      return false
    }
    if(pw.value ==""){
      alert("비번입력")
      pw.focus()
      return false
    }

    document.login_form.submit()
  })
})