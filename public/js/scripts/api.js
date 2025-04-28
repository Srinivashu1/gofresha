// Category Form Submission
document.getElementById('categoryForm').addEventListener('submit', async function (e) {
    e.preventDefault();
  
    try {
      const response = await fetch('http://192.168.1.5/Gofresha/public/categories_add', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
        body: JSON.stringify({
          categoryName: document.getElementById('categoryName').value,
          categorySubtitle: document.getElementById('categorySubtitle').value
        })
      });
  
      // Check if response is JSON
      const contentType = response.headers.get('content-type');
      if (!contentType || !contentType.includes('application/json')) {
        const text = await response.text();
        throw new Error(`Expected JSON but got: ${text.substring(0, 100)}...`);
      }
  
      const data = await response.json();
      
      if (data.status === 'success') {
        alert('Success: ' + (data.message || 'Category added'));
        this.reset();
      } else {
        throw new Error(data.message || 'Server returned error');
      }
    } catch (error) {
      console.error('Full error:', error);
      alert('Error: ' + error.message);
    }
  });


  
//   // First Form Submission with condition
//   document.getElementById('form').addEventListener('submit', async function (e) {
//     e.preventDefault();
    
//     // Add your condition here
//     if (/* your condition */) {
//       try {
//         // Your form submission logic
//       } catch (error) {
//         console.error('Error:', error);
//         alert('Error: ' + error.message);
//       }
//     } else {
//       alert('Condition not met');
//     }
//   });
  
//   // Second Form Submission with condition
//   document.getElementById('form22').addEventListener('submit', async function (e) {
//     e.preventDefault();
    
//     // Add your condition here
//     if (/* your condition */) {
//       try {
//         // Your form submission logic
//       } catch (error) {
//         console.error('Error:', error);
//         alert('Error: ' + error.message);
//       }
//     } else {
//       alert('Condition not met');
//     }
//   });