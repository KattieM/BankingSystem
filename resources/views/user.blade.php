@extends('layouts.app')
@section('content')
    <section id="cover">
        <div id="cover-caption">
            <div id="container" class="container">
                <div class="row text-white">
                    <div class="col-sm-6 offset-sm-3 text-center">
                        <h1 class="display-4">Add new user</h1>
                        <div class="info-form">
                            <form action="" class="form-inlin justify-content-center" id="userForm">
                                <div class="form-group">
                                    <label class="" for="name">Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label class="" for="email">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label class="" for="password">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label class="" for="balance">Balance</label>
                                    <input type="number" step=".01" min=0 class="form-control" name="balance" required>
                                </div>
                                <button type="submit" class="btn btn-secondary">Save User</button>
                            </form>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
