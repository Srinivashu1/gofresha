// Delete 
async function deletes(segment, id) {
  try {
    const ss = API_URL+`${segment}/delete/${id}` ;
    console.log(ss);
    const response = await fetch(API_URL+`${segment}/delete/${id}`);
    const data = await response.json();

    if (data.status === 'success') {
      eval(data.func);
      window.location.href = data.redirect;
    } 
  } catch (error) {
    console.error('Delete error:', error);
  }
}

// // Category  
const form = document.getElementById('category_Form');

if(form) {

  form.addEventListener('submit', async function (e) {
    e.preventDefault();

    const formData = new FormData(form);

    try {
      const response = await fetch(BASEURL_Categories_Add, {
        method: 'POST',
        body: formData
      });

      const data = await response.json();

      if (data.status === 'success') {
        console.log(data);
        eval(data.func);
        window.location.href = data.redirect;

      }
    } catch (error) {
      alert('Error: ' + error.message);
    }
  });
}



async function manageCategories() {
  try {
    const response = await fetch(API_URL +'categories');
    const data = await response.json();
    
    if (data.status === 'success') {
      const encodedData = encodeURIComponent(JSON.stringify(data.products));
      window.location.href = `${data.redirect}?data=${encodedData}`;
    }
  } catch (error) {
    console.error(error);
  }  
}

// // SubCategory

const subCategory_Form = document.getElementById('subCategory_Form');
if(subCategory_Form) {
  subCategory_Form.addEventListener('submit', async function (e) {
    e.preventDefault();
  
    console.log('Form submitted');
  
    const formData1 = new FormData(subCategory_Form);
  
    try {
      const response = await fetch(API_URL +'subcategories', {
        method: 'POST',
        body: formData1
      });
  
      const data = await response.json();
  
      if (data.status === 'success') {
        console.log(data);
        window.location.href = data.redirect;
        manageSubCategories();
  
      }
    } catch (error) {
      alert('Error: ' + error.message);
    }
  });
}




async function manageSubCategories() {
  try {
    const response = await fetch(API_URL +'subcategories',{
      method: 'GET',
    });
    const data = await response.json();
    
    if (data.status === 'success') {
      console.log(data);
      const combinedData = {
        subCategory: data.subCategory || [],
        categories: data.categories || []
      };
      
      
      const encodedData = encodeURIComponent(JSON.stringify(combinedData));
      window.location.href = `${data.redirect}?data=${encodedData}`;
    }
  } catch (error) {
    console.error(error);
  }  
}


// Products  

const product_form = document.getElementById('product_form');
product_form.addEventListener('submit', async function (e) {
  e.preventDefault();

  console.log('Form submitted');

  const formData3 = new FormData(product_form);

  try {
    const response = await fetch(API_URL +'products', {
      method: 'POST',
      enctype:"multipart/form-data",
      body: formData3
    });

    const data = await response.json();

    if (data.status === 'success') {
      console.log(data);
      eval(data.func);
      
      window.location.href = data.redirect;

    }
  } catch (error) {
    alert('Error: ' + error.message);
  }
});


async function addproductview() {
  try {
    const response = await fetch(API_URL +'products',{
      method: 'GET'
    });
    const data = await response.json();
    
    if (data.status === 'success') {
      console.log(data);
      const combinedData = {
        subCategory: data.subCategory,
        categories: data.categories
      };
      // console.log(combinedData);

      const encodedData = encodeURIComponent(JSON.stringify(combinedData));
      window.location.href = `${data.redirect}?data=${encodedData}`;
    }
  } catch (error) {
    console.error(error);
  }  
}

async function productsview() {
  try {
    const response = await fetch(API_URL + 'productsview', {
      method: 'GET'
    });
    const data = await response.json();

    if (data.status === 'success') {
      const combinedData = {
        products: data.products,
        products_variants: data.products_variants,
        categories: data.categories,
        subcategories: data.subcategories
      };

      localStorage.setItem('combinedData', JSON.stringify(combinedData));

      window.location.href = API_URL + 'productsProcess';
    }
  } catch (error) {
    console.error(error);
  }
}

const storedData = localStorage.getItem('combinedData');
  if (storedData) {
    const combinedData = JSON.parse(storedData);
    
    fetch('productshow', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ combinedData: combinedData }),
    })
    .then(response => response.json())
    .then(data => {
      console.log('Server response:', data);
    })
    .catch(error => {
      console.error('Error sending to productshow:', error);
    });
  }


async function editProduct(id) {
  try {
    const response = await fetch(API_URL + '/product-edit/' + id, {
      method: 'GET',
    });

    const data = await response.json();

    if (data.status === 'success') {
      productData = {
        subCategory: data.subCategory || [],
        categories: data.categories || [],
        products: data.products || [],
        product_variants: data.product_variants || [],
      };
      const encodedData = encodeURIComponent(JSON.stringify(productData));
      window.location.href = `${data.redirect}?data=${encodedData}`;
    }
  } catch (error) {
    console.error('Error fetching product data:', error.message);
  }
}


