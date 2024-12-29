
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>List of Timetables</h2>
        </div>
        <div class="pull-right my-2">
            <a href="{{ route('timetables.create') }}" class="btn btn-success">Add New Timetable</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-borderless table-striped table-hover bg-white">
    <thead class="thead-light">
        <tr>
            <th>No</th>
            <th>Student</th>
            <th>Subject</th>
            <th>Day</th>
            <th>Hall</th>
            <th>Group</th>
            <th>Time From</th>
            <th>Time To</th>
            <th>Created At</th>
            <th style="width: 280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @if ($timetables->count() > 0)
            @foreach ($timetables as $t)
            <tr>
                <td>{{ $t->id }}</td>
                <td>{{ $t->user->name }}</td>
                <td>{{ $t->subject->subject_name }}</td>
                <td>{{ $t->day->day_name }}</td>
                <td>{{ $t->hall->lecture_hall_name }}</td>
                <td>{{ $t->lecturer_group->name }}</td>
                <td>{{ $t->time_from }}</td>
                <td>{{ $t->time_to }}</td>
                <td>{{ $t->created_at }}</td>
                <td>
                    <form action="{{ route('timetables.destroy',$t->id)}}" method="post">
                        <a href="{{ route('timetables.show', $t->id)}}" class="btn btn-info">
                            <i class="fas fa-eye nav-icon"></i>
                        </a>
                        <a href="{{ route('timetables.edit', $t->id)}}" class="btn btn-primary">
                            <i class="fas fa-edit nav-icon"></i>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-delete">
                            <i class="fas fa-trash nav-icon"></i>
                        </button>
                    </form>
                </td>
            </tr>

            @endforeach
        @else
            <tr>
                <td colspan="10" class="text-center">No data available</td>
            </tr>
        @endif
    </tbody>

</table>

@push('scripts')
    <script>
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                const form = this.closest('form');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
