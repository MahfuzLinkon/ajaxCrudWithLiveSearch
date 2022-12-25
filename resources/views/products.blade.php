<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Products With Ajax</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
      <section class="py-5">
        <div class="container">
          <div class="row ">
            <div class="col-md-10 mx-auto">
              
              <div class="card">
                <div class="card-header bg-transparent">
                  <h4 class="text-center py-3 ">Manage Product With Ajax</h4>
                </div>
                <div class="card-body">
                  <div class="">
                   
                    <div>
                      <div class="col-md-8 float-start"></div>
                      <div class="col-md-4">
                        <!-- Button trigger modal Create -->
                        <a href="#createProductModal" class="btn btn-success mb-3 " data-bs-toggle="modal">Create Product</a>
                      </div>
                    </div>

                    <table id="productTable" class="table table-striped table-hover table-bordered">
                      <thead>
                        <tr class="text-center">
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Price</th>
                          <th scope="col" width="20%" >Action</th>
                        </tr>
                      </thead>
                      <tbody id="table">
                        {{-- @foreach ($products as $product)
                        <tr>
                          <th>{{ $loop->iteration }}</th>
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->price }}</td>
                          <td class="text-center">
                            <a href="" class="btn btn-primary"><i class="las la-edit"></i></a>
                            <a href="" class="btn btn-danger"><i class="las la-trash"></i></a>
                          </td>
                        </tr>
                        @endforeach --}}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {{-- Modal --}}
      @include('_inc.modal')

      {{-- Script --}}
      @include('_inc.script')
  </body>
</html>