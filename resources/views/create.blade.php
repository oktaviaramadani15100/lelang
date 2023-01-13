<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="row">
        <div class="col-md-9">
            <a href="/tambah_detail">upload</a>
            <table style="overflow:hidden;">
                {{-- <thead>
                    <tr>
                        <th>ID</th>
                        <th>Preview Item</th>
                        <th>Price</th>
                        <th>Minimum Bid</th>
                        <th>Starting Date</th>
                        <th>Expiration Date</th>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                </thead> --}}

                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    <div class="container my-5 d-flex justify-content-evenly flex-wrap">
                    @foreach ($data as $row)

                    {{-- <tr>
                        
                        <th scope="row">{{$no++}}</th>
                        <th>{{$row->preview_item}}</th>
                        <th>{{$row->price}}</th>
                        <th>{{$row->minimum_bid}}</th>
                        <th>{{$row->starting_date}}</th>
                        <th>{{$row->expiration_date}}</th>
                        <th>{{$row->title}}</th>
                        <th>{{$row->deskrpsi}}</th>
                    </tr> --}}
                    <div class="card my-5" style="width: 25rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$row->preview_item}}</h5>
                        <div class="my-3 d-flex justify-content-lg-around align-items-center">
                            <p class="card-text">{{$row->expiration_date}}</p>
                            <p class="card-text">{{$row->price}}</p>
                            
                        </div>
                        <div class="my-5 d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-primary">Place a Bid</a>
                            <a href="" class="btn btn-light">View Detail</a>
                        </div>
                        </div>
                      </div>
                    @endforeach
                </div>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>