@extends("layouts.app")

@section("page-title", "Homepage")

@section("main")
    <div class="container-fluid">
        <!-- Table -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Azienda</th>
                    <th>Stazione di partenza</th>
                    <th>Stazione di arrivo</th>
                    <th>Data di partenza</th>
                    <th>Data di arrivo</th>
                    <th>Orario di partenza</th>
                    <th>Orario di arrivo</th>
                    <th>Codice treno</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($trains_list as $item)
                    <tr>
                        <td>{{ $item->azienda }}</td>
                        <td>{{ $item->stazione_partenza }}</td>
                        <td>{{ $item->stazione_arrivo }}</td>
                        <td>{{ $item->data_partenza }}</td>
                        <td>{{ $item->data_arrivo }}</td>
                        <td>{{ $item->orario_partenza }}</td>
                        <td>{{ $item->orario_arrivo }}</td>
                        <td>{{ $item->codice_treno }}</td>
                    </tr>
                @empty
                    <div>Not Available</div>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
