document.getElementById('categoryForm').addEventListener('submit', async function (e) {
  e.preventDefault();

  const categoryName = document.getElementById('categoryName').value;
  const categorySubtitle = document.getElementById('categorySubtitle').value;
 

  try {
    const response = await fetch('http://192.168.1.5/Gofresha/public/categories_add', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ categoryName, categorySubtitle })
    });
    const data = await response.json();
    if (data.status === 'success') {
      console.log(data);
      window.location.href = data.redirect; // redirect to dashboard

      
     
    } 
  } catch (error) {
   
    alert('Error: ' + error.message);
  }
});









document.getElementById('categoryForm').addEventListener('submit', async function (e) {
  e.preventDefault();

  try {
    const response = await fetch(BASE_categories_add, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json' // Explicitly ask for JSON
      },
      body: JSON.stringify({
        categoryName: document.getElementById('categoryName').value,
        categorySubtitle: document.getElementById('categorySubtitle').value
      })
    });

    // First check if the response is JSON
    const contentType = response.headers.get('content-type');
    if (!contentType || !contentType.includes('application/json')) {
      const text = await response.text();
      throw new Error(`Expected JSON but got: ${text.substring(0, 100)}...`);
    }

    const data = await response.json();
    
    if (data.status === 'success') {
      alert('Success: ' + (data.message || 'Category added'));
      console.log('Success:', data);
      this.reset();
    } else {
      throw new Error(data.message || 'Server returned error');
    }
  } catch (error) {
    console.error('Full error:', error);
    alert('Error: ' + error.message);
  }
});














