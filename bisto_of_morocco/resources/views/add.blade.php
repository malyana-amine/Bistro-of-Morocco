
<x-app-layout>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
{{--              
              <h1>{{$data}}</h1> --}}
              {{-- @foreach ($data as $item)
          <h1>{{ $item->id}}</h1>
              @endforeach --}}
                <div class="card-header">{{ __('Add plate') }}</div>

                <div class="card-body">
                   
                        {{-- <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">plate name</label>
                          <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="" value="">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label" >plate price</label>
                          <input type="number" class="form-control" name="price" id="">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Add</button>
                      </form> --}}



                      
                      <form method="GET" enctype="multipart/form-data" action="{{ route('store')}}">
                        @csrf
                        {{-- @method('PUT') --}}
    <div class="relative z-0 w-full mb-6 group w-50">
        <input type="text" name="name" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Plate name</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input type="file" name="image" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Plate price</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input type="number" name="price" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Plate price</label>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  




                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>