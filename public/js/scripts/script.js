document.getElementById('form').addEventListener('submit', async function (e) {
  e.preventDefault();

  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;
  const para=document.getElementById('error-message');

  try {
    const response = await fetch(BASE_URL, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ username, password })
    });
    const data = await response.json();
    if (data.status === 'success') {
      console.log(data);
      window.location.href = data.redirect; // redirect to dashboard
     
    } else {
      para.style.display='block';
      para.innerHTML=data.message;
      console.log(data);
    }       

  } catch (error) {
   
    alert('Error: ' + error.message);
  }
});


