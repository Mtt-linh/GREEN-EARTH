@extends("admin.layout")
@section("content")
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">New Organize </h4>
                            <p class="card-category"> ------------------------------------------------- </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <form role="form" action="{{url("admin/save-organize")}}" method="post">
                                        @method("POST")
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name Organize</label>
                                            <input type="text"  name="name" class="form-control" placeholder="Name.............................">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Email Organize</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email...................................">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Phone Organize</label>
                                            <input type="number" name="phone" class="form-control" placeholder="Phone....................................">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Address Organize</label>
                                            <input type="text" name="address" class="form-control" placeholder="Admin..........................................">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Client Id Organize</label>
                                            <input type="number" name="client_id" class="form-control" placeholder="Client id..........................................">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Secret Organize</label>
                                            <input type="text" name="secret" class="form-control" placeholder="secret..............................................">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Team Size Organize</label>
                                            <input type="number" name="team_size" class="form-control" placeholder="Team size...............................................">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-round">Submit</button>
                                    </form>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


