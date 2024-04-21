<x-app-cars-layout>

    <x-slot name="title">
        Car Directory
    </x-slot>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Car Directory
                                <a href="{{ url('categories/create') }}" class="btn btn-primary float-end">Add Cars</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th> Name </th>
                                        <th> Model </th>
                                        <th> Plate </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $item)
                                    <tr>
                                        <td> {{$item->id}}</td>
                                        <td> {{$item->name}}</td>
                                        <td> {{$item->description}}</td>
                                        <td> {{$item->plate}}</td>
                                        <td>
                                            <a href="{{ url('categories/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>

                                            <a href="{{ url('categories/'.$item->id.'/delete') }}" 
                                            class="btn btn-danger mx-1"
                                            onclick="return confirm('Are you sure to delete ?')"
                                            >
                                            Delete
                                        </a>
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

</x-app-cars-layout>
