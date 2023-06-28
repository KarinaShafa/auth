@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    {{-- route ini digunakan untuk mengarahkan ke halaman membuat employee baru --}}
                    <a href="{{ route('employees.create') }}" class="btn btn-primary">Create Employee</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                {{-- membuat header dari sebuah tabel pada view dalam aplikasi web. --}}
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- foreach yang digunakan untuk mengulang data karyawan (employees)
                        yang telah diterima dari controller dan dilewatkan ke view. --}}
                    @foreach ($employees as $employee)
                        <tr>
                            {{-- menampilkan nama awal --}}
                            <td>{{ $employee->firstname }}</td>
                            {{-- meanmpilkan nama akhir --}}
                            <td>{{ $employee->lastname }}</td>
                            {{-- menampilkan email --}}
                            <td>{{ $employee->email }}</td>
                            {{-- menampilkan umur --}}
                            <td>{{ $employee->age }}</td>
                            {{-- meanmpilkan job --}}
                            <td>{{ $employee->position_name }}</td>
                            <td>
                                <div class="d-flex">
                                    {{-- button dengan icon yang digunakan untuk menampilkan data employee --}}
                                    <a href="{{ route('employees.show', ['employee' => $employee->employee_id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                    {{-- button dengan icon yang digunakan untuk mengedit data employee --}}
                                    <a href="{{ route('employees.edit', ['employee' => $employee->employee_id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                    <div>
                                        {{-- button dengan icon yang digunakan untuk menghapus data employee --}}
                                        <form action="{{ route('employees.destroy', ['employee' => $employee->employee_id]) }}" method="POST">
                                            {{-- untuk memastikan bahwa permintaan yang dikirimkan ke server berasal dari sumber yang valid --}}
                                            @csrf
                                            {{-- untuk menentukan metode HTTP yang akan digunakan dalam permintaan penghapusan. --}}
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @endsection
