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



// JavaScript Part

// Make sure you have BASE_URL defined for login form


// Handle categoryForm submission
// const categoryForm = document.getElementById('categoryForm2');

// console.log(categoryForm);
// if (categoryForm) {
//     categoryForm.addEventListener('submit', async function (e) {
//     e.preventDefault();
  
//     const categoryName = document.getElementById('categoryName').value;
//     const categorySubtitle = document.getElementById('categorySubtitle').value;
    
//     console.log(categoryName,categorySubtitle);
 

//     try {
//       const response = await fetch(BASEURL + 'categories_add',{
//         method: 'POST',
//         headers: {
//           'Content-Type': 'application/json'
//         },
//         body: JSON.stringify({ categoryName, categorySubtitle })
//       });
//       const data = await response.json();
//       if (data.status === 'success') {
//         console.log(data);
//         // window.location.href = data.redirect; 
      
//       } 
//     } catch (error) {
    
//       alert('Error: ' + error.message);
//     }
//   });
  
  
// }else{
//   console.log('No category form found');
// }

// Handle login form submission
// const loginForm = document.getElementById('form');
// if (loginForm) {
//   loginForm.addEventListener('submit', async (e) => {
//     e.preventDefault();

//     const username = document.getElementById('username').value;
//     const password = document.getElementById('password').value;
//     const para = document.getElementById('error-message');

//     try {
//       const response = await fetch(BASE_URL, {
//         method: 'POST',
//         headers: {
//           'Content-Type': 'application/json'
//         },
//         body: JSON.stringify({ username, password })
//       });
//       const data = await response.json();

//       if (data.status === 'success') {
//         console.log(data);
//         window.location.href = data.redirect; // Redirect to dashboard or page
//       } else {
//         para.style.display = 'block';
//         para.innerHTML = data.message;
//         console.log(data);
//       }       

//     } catch (error) {
//       alert('Error: ' + error.message);
//     }
//   });
// }


// document.getElementById('categoryForm').addEventListener('submit', async function (e) {
//   e.preventDefault();

//   const categoryName = document.getElementById('categoryName').value;
//   const categorySubtitle = document.getElementById('categorySubtitle').value;

//   console.log(categoryName,categorySubtitle);
 

//   try {
//     const response = await fetch('http://192.168.1.5/Gofresha/public/categories_add', {
//       method: 'POST',
//       headers: {
//         'Content-Type': 'application/json'
//       },
//       body: JSON.stringify({ categoryName, categorySubtitle })
//     });
//     const data = await response.json();
//     if (data.status === 'success') {
//       console.log(data);
//       window.location.href = data.redirect; 
     
//     } 
//   } catch (error) {
   
//     alert('Error: ' + error.message);
//   }
// });




































// document.getElementById('categoryForm').addEventListener('submit', async function (e) {
//   e.preventDefault();

//   const form = document.getElementById('categoryForm');
//   const formData = new FormData(form);

//   try {
//     const response = await fetch(BASE_URL + 'your-controller-method-url', {  // Change to your correct endpoint
//       method: 'POST',
//       body: formData
//     });

//     const data = await response.json();
//     if (data.status === 'success') {
//       console.log(data);
//       window.location.href = data.redirect; // Redirect if needed
//     } else {
//       alert(data.message); // Show error
//       console.log(data);
//     }
//   } catch (error) {
//     alert('Error: ' + error.message);
//   }
// });


