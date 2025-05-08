<form id="productsload" method="POST" action="productshow">
  <input type="hidden" name="combinedData" id="combinedDataInput">
</form>



<script>
    API_URL = "<?=  base_url(); ?>"
  async function productsview() {
    try {
      const response = await fetch(API_URL + 'productsview');
      const data = await response.json();

      if (data.status === 'success') {
        const combinedData = {
          products: data.products,
          products_variants: data.products_variants,
          categories: data.categories,
          subcategories: data.subcategories
        };

        document.getElementById('combinedDataInput').value = JSON.stringify(combinedData);
        document.getElementById('productsload').submit();
      }
    } catch (error) {
      console.error(error);
    }
  }

  productsview();
</script>
