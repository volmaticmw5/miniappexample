<div class="container bg-light mt-5 p-5" role="main">
    <div class="jumbotron">
        <h2>Table component (3)</h2>
        
        <table class="table">
        <thead>
            <tr>
            @foreach($table_data[0] as $key => $value)
                <th scope="col">{{ ucfirst(str_replace('_', ' ', $key)) }}</th>
            @endforeach
            </tr>
        </thead>
        <tbody id="tBody">
            @for($i = 0; $i < count($table_data); $i++)
            <tr>
                @foreach($table_data[$i] as $key => $value)
                    @if($loop->iteration == 1)
                        <th scope="row">{{ $value }}</th>
                    @else
                        <td>{{ $value }}</td>
                    @endif
                @endforeach
            </tr>
            @endfor
        </tbody>
        </table>
    </div>
</div>