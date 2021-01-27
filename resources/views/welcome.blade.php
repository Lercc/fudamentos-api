@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <post-component inline-template>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>POST</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="post in posts">
                                    <td v-text="post.número"></td>
                                    <td v-text="post.título"></td>
                                    <td v-text="post.creado_hace"></td>
                                </tr>
                            </tbody>
                        </table>
                    </post-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
