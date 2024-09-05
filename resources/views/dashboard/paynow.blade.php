@extends('dashboard.masterLayout');

@push('meta')
@endpush
@push('styles') 
<link href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.min.css" rel="stylesheet">
<style>
    
    a.cata-btn:hover {
            color: white;
        }

        .item-container {
            border-radius: 8px;
            margin: 1rem;
            background-color: white;
            padding:1rem;
            text-align: left;
            min-height:13rem;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            border-bottom: solid 1rem var(--bluec);

        }

        .contain {
            margin: 4rem auto;
            background-color: #e9f4ff;
            border-radius: 8px;
            padding: 0rem 1rem;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }
        .item-container:hover{
            /* background-color: var(--bluec); */
            /* color:white; */
            transition: all .5s;
        }
        .section-svg{
            align-self:center;
        }
        @media(max-width:768px) {}

        .zoom-eff {
            --f: 1.15;
            clip-path: inset(0);
            transition: .4s;
        }

        .zoom-eff:hover {
            clip-path: inset(calc((1 - 1/var(--f)) * 50%));
            scale: var(--f)
        }

        a{
            text-decoration: none;
            color:black;
        }

        p{
            margin:4px 0 ;
        }
    </style>
@endpush
    
    <main>
        @push('content')
        <section class="container ">
            <div class="contain">
                <h3 class="fw-bold py-2">Recent Won Lots</h3>
            <div class="row px-auto  text-center">
                <div class=" col-12">
                    <table  id="myTable" class="display">
                        <thead>
                            <tr>
                                <td width="10%">S.NO</td>
                                <td width="50%">PRODUCT</td>
                                <td>Status</td>
                                <td>AMOUNT</td>
                                <td>PAY</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bids as $key => $bid)<tr>
                                <td>{{$key+1}}</td>
                                <td>{{$bid->lots->title}}</td>
                                <td><span class="badge rounded-pill 
                                    @if($bid->paid == 0)
                                    bg-dark">Pending
                                    @elseif($bid->paid == 1)
                                    bg-success">Paid
                                    @endif
                                    </span></td>
                                <td>£ {{$bid->bid_amount}}</td>
                                <td><a href="{{url('pay/'.$bid->id)}}"><span class="btn btn-outline-secondary">Pay Here</span></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                       </table>
                </div>
            </div>
            </div>
        </section>
        @endpush
    </main>
    @push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.min.js" ></script>

    <script>
        let table = new DataTable('#myTable');
    </script>
    @endpush