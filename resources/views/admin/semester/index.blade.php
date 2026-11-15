@extends('admin.master')


@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title"> Add Semester Details</h1>
                    </div>
                    
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Add deatils</h3>
                            </div>
                            <div class="card-body">
                                <p class="text-success">{{session('message')}}</p>

                                <button class="btn btn-warning mb-5 addField">Add Fields</button>

                                <form  action="{{route('semester.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                            <label for="validationCustom011">Semester name</label>
                                            <select name="semester_name" id="semester_name" class="form-control">
                                                <option value="">Select Semester</option>
                                                <option value="1">1st Semester</option>
                                                <option value="2">2nd Semester</option>
                                                <option value="3">3rd Semester</option>
                                                <option value="4">4th Semester</option>
                                                <option value="5">5th Semester</option>
                                                <option value="6">6th Semester</option>
                                                <option value="7">7th Semester</option>
                                                <option value="8th Semester">8th Semester</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="row firstRow">
                                            <div class="col-md-6 form-group">
                                                <input type="text" class="form-control" name="names[]" placeholder="Enter Text" required class="w-100">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input type="file" class="form-control" name="filess[]" required class="w-100">
                                            </div>

                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){

            //FOR ADD ROWS
            $('.addField').click(function(){
                $('.firstRow').parent().append(`
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="names[]" class="form-control" required placeholder="Enter Text" class="w-100">
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="file" name="filess[]" class="form-control" required class="w-100">
                        </div>
                        <div class="col-md-2 form-group">
                            <button type="button" class="btn btn-danger deleteRow">Remove</button>
                        </div>
                    </div>
                `);
            });

            //FOR DELETE ROWS
            $(document).on('click','.deleteRow',function(){
                $(this).parent().parent().remove();
            });
        });
    </script>

    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection
