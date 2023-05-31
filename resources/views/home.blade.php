@if($data!=null)
<table border = '1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Create At</td>
        <td>Updated At</td>
    </tr>

    @foreach($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
        </tr>
    @endforeach
</table>
@endif

<p style="margin:5px">1. Create your Database with: php artisan migrate</p>
<p style="margin:5px">2. Seed your Database with: php artisan db:seed --class=DatabaseSeeder</p>

<p style="margin:5px">3. Append the URL of this page directly with &lsquo;/&rsquo;
and any value from the &quot;id&quot;
column of the above table to view the record of only that value, e.g. &quot;localhost:8000/1&quot;</p>

<p style="margin:5px"><b>Note:</b> Use Complete Values Only</p>
