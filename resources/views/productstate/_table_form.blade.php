<table class="table table-hover">
    <thead>
        <th></th>
        <th></th>
    </thead>

    <tbody>
        <tr>
            <td>
                <label>Brand : </label>  {{$phonedetails->brand_name}}<br>
                <label>Model : </label>  {{$phonedetails->model}}<br>
                <label>Cellular : </label> {{{$phonedetails->cellular}}}<br>
                <label>Rom : </label> {{{$phonedetails->rom}}}<br>
                <label>Size : </label> {{{$phonedetails->size}}}<br>
            </td>
            <td>
                <label>Languages : </label> {{$phonedetails->languages}}<br>
                <label>Color : </label> {{$phonedetails->color}}<br>
                <label>Release Date : </label> {{{$phonedetails->releasedate}}}<br>
                <label>Descriptions : </label> {{$phonedetails->descriptions}}<br>
            </td>
        </tr>
    </tbody>
  </table>