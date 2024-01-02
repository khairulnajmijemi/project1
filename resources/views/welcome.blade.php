<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Datatable</title>

   <link href="/bootstrap-5.3.2-dist/css/bootstrap.css" rel="stylesheet">

</head>

<body class="antialiased">

   <div class="container vh-100 d-flex justify-content-center align-items-center">
       <div class="row">
           <div class="col-sm-12">
           <style>
.card {
    transition: all 0.3s ease;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0);
}
                        </style>
               <div class="card text-center">
                  <div class="card-body">
                      <div class="d-flex justify-content-between">
                          <h2 class="card-title">Laravel</h2>
                          <form action="{{ route('createproduct') }}" method="GET">
                              <button type="submit" class="btn btn-secondary btn-md font-bold py-1 px-2">
                                 Create new Products
                              </button>
                          </form>
                      </div>

                      <div class="d-flex justify-content-end mb-3">
                          <form action="{{ route('welcome') }}" method="GET" class="d-flex">
                              <input type="text" id="search" name="search" class="form-control ms-2" placeholder="Find" required />
                              <button type="submit" class="btn btn-secondary btn-md font-bold py-1 px-2 me-2">
                                 Search
                              </button>
                          </form>
                      </div>
                      
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Price(RM)</th>
                                 <th scope="col">Detail</th>
                                 <th scope="col">Publish</th>
                                 <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($products as $product)
                                 <tr>
                                     <td>{{ $product->id }}</td>
                                     <td>{{ $product->name }}</td>
                                     <td>{{ $product->price }}</td>
                                     <td>{{ $product->details }}</td>
                                     <td>{{ $product->publish }}</td>
                                     <td>
                                         <div class="d-flex">
                                             <form action="{{ route('viewproduct', ['id' => $product->id]) }}" method="GET">
                                                <button type="submit" class="btn btn-success btn-sm font-bold py-1 px-2 me-2">
                                                    Show
                                                </button>
                                             </form>
                                             <form action="{{ route('editpage', ['id' => $product->id]) }}" method="GET">
                                                <button type="submit" class="btn btn-success btn-sm font-bold py-1 px-2 me-2 rounded">
                                                    Edit
                                                </button>
                                             </form>  
                                             <form action="{{ route('deleteproduct', ['id' => $product->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                             <button type="submit" class="btn btn-success btn-sm font-bold py-1 px-2 rounded">
                                                Delete
                                             </button>
                                            </form>              
                                         </div>
                                     </td>
                                 </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
               </div>
           </div>
       </div>
   </div>

   <script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
</body>

</html>