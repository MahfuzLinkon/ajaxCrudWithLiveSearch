<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    </script>
    <script>
      // Read data
      function getAllData(){
          $.ajax({
            url: "/get-data",
            method: "GET",
            dataType: "JSON",
            success:function(response){
             let tableData = " ";
              $.each(response, function(key,value){
                //  console.log(value.name);
                tableData +=  "<tr>";
                tableData +=  "<td>"+value.id+"</td>";
                tableData +=  "<td>"+value.name+"</td>";
                tableData +=  "<td>"+value.price+"</td>";
                tableData +=  "<td>";
                tableData +=  "<button class='btn btn-primary' id='editProduct' data-bs-toggle='modal' data-bs-target='#updateProductModal' data-id='"+value.id+"' data-name='"+value.name+"' data-price='"+value.price+"'>Edit</button>";
                tableData +=  "<button class='btn btn-danger ms-2'>Delete</button>";
                tableData +=  "</td>";
                tableData +=  "</tr>";
              })
              $('#table').html(tableData);
            }
          });
        }
        getAllData();

      // Store data
      $(document).on('click', '#createProduct', function(e){
        e.preventDefault();
        let productName = $('#name').val();
        let productPrice = $('#price').val();
        $.ajax({
            url: "{{ route('createProduct') }}",
            method: "POST",
            data:{name: productName, price: productPrice},
            dataType: "JSON",
            success:function(response){
              if(response.status == 'success'){
                $('#createProductModal').modal('hide');
                $('#createProductForm')[0].reset();
                // $('#productTable').load(location.herf + ' #productTable');
                getAllData();
                
              }
              
            }, error:function(error){
              $('#errorPrint').html('');
               
               let errorMsg = error.responseJSON;
              $.each(errorMsg.errors, function(index, value){
                $('#errorPrint').append('<span class="text-danger">' +value+ '</span><br>');
              })
            }
        });
      });

      //Update product Data
      $(document).on('click', '#editProduct', function(e){
        e.preventDefault();
        let productId = $(this).data('id');
        let productName = $(this).data('name');
        let productPrice = $(this).data('price');
        
        $('#updateId').val(productId);
        $('#updateName').val(productName);
        $('#updatePrice').val(productPrice);
      });

      // Store Update data
      $(document).on('click', '#updateProduct', function(e){
        e.preventDefault();
        let productId = $('#updateId').val();
        let productName = $('#updateName').val();
        let productPrice = $('#updatePrice').val();

        $.ajax({
            url: "{{ route('updateProduct') }}",
            method: "PUT",
            data:{id: productId, name: productName, price: productPrice},
            dataType: "JSON",
            success:function(response){
              if(response.status == 'success'){
                $('#updateProductModal').modal('hide');
                $('#updateProductForm')[0].reset();
                // $('#productTable').load(location.herf + ' #productTable');
                getAllData();
                
              }
              
            }, error:function(error){
              $('#errorPrintUpdate').html('');
               
              let errorMsg = error.responseJSON;
              $.each(errorMsg.errors, function(index, value){
                $('#errorPrintUpdate').append('<span class="text-danger">' +value+ '</span><br>');
              })
            }
        }); // Ajax end

      });
    </script>