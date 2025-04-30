
document.getElementById('category_Form').addEventListener('submit', async function (e) {
  e.preventDefault();

  const form = document.getElementById('category_Form');
  const formData = new FormData(form);

  try {
    const response = await fetch(BASEURL_Categories_Add, {
      method: 'POST',
      body: formData
    });

    const data = await response.json();

    if (data.status === 'success') {
      console.log(data);
      window.location.href = data.redirect;
      addProduct();

    }
  } catch (error) {
    alert('Error: ' + error.message);
  }
});


// document.getElementById('category_Form').addEventListener('submit', async function (e) {
//   e.preventDefault();

//   const categoryName = document.getElementById('categoryName').value;
//   const categorySubtitle = document.getElementById('categorySubtitle').value;
 
//   console.log(BASEURL_Categories_Add);
//   try {
//     const response = await fetch(BASEURL_Categories_Add, {
//       method: 'POST',
//       headers: {
//         'Content-Type': 'application/json'
//       },
//       body: JSON.stringify({ categoryName, categorySubtitle })
//     });
//     const data = await response.json();
//     if (data.status === 'success') {
//       console.log(data);
//       addProduct();

//       window.location.href = data.redirect; // redirect to dashboard

     
//     } 
//   } catch (error) {
   
//     alert('Error: ' + error.message);
//   }
// });



  
const API_URL = 'http://192.168.195.19/Gofresha/public/';



// async function addProduct() {
//   try {
//     const response = await fetch(API_URL + 'categories');
//     const data = await response.json();
    
//     if (data.status === 'success') {
//       const encodedData = encodeURIComponent(JSON.stringify(data.products));
//       window.location.href = `${data.redirect}?data=${encodedData}`;
//     }
//   } catch (error) {
//     console.error(error);
//   }



  
// }


async function addProduct() {
  try {
    const response = await fetch(API_URL + 'categories');
    const data = await response.json();
    
    if (data.status === 'success') {
      const encodedData = encodeURIComponent(JSON.stringify(data.products));
      window.location.href = `${data.redirect}?data=${encodedData}`;
    }
  } catch (error) {
    console.error(error);
  }



  
}













