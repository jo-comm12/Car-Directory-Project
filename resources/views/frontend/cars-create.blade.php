<x-app-cars-layout>

    <x-slot name="title">
        Add Cars
    </x-slot>

    <div class="containter">
        <form action="{{ url('cars/create') }}" method="POST">
            @csrf

            <br>
            <div class="row justify-content-center">
                <div class="col-md-6">

                    @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif

                    <!-- @if ($errors->any())
                    <div>
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif -->

                    <div class="card mt-4">
                        <div class="card-body">

                            <div class="mb-3">
                                <label>Car Name</label>
                                <input type="text" name="name" value="{{ old('name')}}" class="form-control" />
                                @error('name') <span class="text-danger"> {{$message}} </span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Car Model</label>
                                <textarea name="description"  class="form-control"> </textarea>
                                @error('description') <span class="text-danger"> {{$message}} </span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Car Plate</label>
                                <input type="text" name="plate" class="form-control" />
                                @error('plate') <span class="text-danger"> {{$message}} </span> @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary"> Save </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>  

        </form>
    </div>


</x-app-cars-layout>
