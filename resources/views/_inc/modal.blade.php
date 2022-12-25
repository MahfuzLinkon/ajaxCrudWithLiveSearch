  <!-- Create Modal -->
  <div class="modal fade" id="createProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <section>
            <div>
                <form action="" id="createProductForm">
                    @csrf
                    <div id="errorPrint">
                    </div>
                    <div>
                        <label for="name">Product Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="price">Product Price</label>
                        <input type="number" name="price" id="price" class="form-control">
                    </div>
                    <div class="py-3 float-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="las la-times"></i></button>
                        <button type="button" id="createProduct" class="btn btn-success">Create Product</button>
                    </div>
                </form>
            </div>
            
          </section>
        </div>
      </div>
    </div>
  </div>

    <!-- Update Modal -->
    <div class="modal fade" id="updateProductModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="updateModalLabel">Update Product</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <section>
              <div>
                  <form action="" id="updateProductForm">
                      @csrf
                      <div id="errorPrintUpdate">
                      </div>
                      <input type="hidden" name="updateId" id="updateId">
                      <div>
                          <label for="name">Product Name</label>
                          <input type="text" name="name" id="updateName" class="form-control">
                      </div>
                      <div class="mt-3">
                          <label for="price">Product Price</label>
                          <input type="number" name="price" id="updatePrice" class="form-control">
                      </div>
                      <div class="py-3 float-end">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="las la-times"></i></button>
                          <button type="button" id="updateProduct" class="btn btn-success">Update Product</button>
                      </div>
                  </form>
              </div>
              
            </section>
          </div>
        </div>
      </div>
    </div>