@extends('layouts.app')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 dark:bg-gray-800 overflow-hidden sm:rounded-lg d-flex justify-content-center">
                <div class="d-grid gap-3 grid-cols-1 md:grid-cols-2 flex">
                    <a href="/lists/all">
                      <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Lists</h5>
                          <p class="card-text">Lists all lists.</p>
                        </div>
                      </div>
                    </a>

                    <a href="/tasks/all">
                      <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Tasks</h5>
                          <p class="card-text">List all the tasks.</p>
                        </div>
                      </div>
                    </a>
                    <a href="/users/all">
                      <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Users</h5>
                          <p class="card-text">Lists all the Users.</p>
                        </div>
                      </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
