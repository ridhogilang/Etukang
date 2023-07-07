@extends('layout.main')

@section('container')
<div class="section-empty">
    <div class="container content">
        <h1 class="text-center">Formulir</h1>
        <div class="row proporzional-row">
            <div class="col-md-6 col-sm-12 boxed-inverse">
                <ul class="list-texts list-texts-justified">
                    <li><b>Address:</b> <span>Sturlly Technologies, PO Box 16122, London</span></li>
                    <li><b>Offices:</b> <span>Studio Massimo, PO Box 16120, Street</span></li>
                    <li><b>Skype:</b> <span>company.name</span></li>
                    <li><b>Phones:</b> <span>(123) 0 123 455669 |  (123) 0 123 455600</span></li>
                    <li><b>Emails:</b> <span>info@example.com | sales@example.com</span></li>
                </ul>
                <hr class="space m" />
                <table class="grid-table border-table text-left">
                    <tbody>
                        <tr>
                            <td><a href="#" class="btn-border btn btn-xs">Marketing</a></td>
                            <td><a href="#" class="btn-border btn btn-xs">Press area</a></td>
                            <td><a href="#" class="btn-border btn btn-xs">Support</a></td>
                        </tr>
                    </tbody>
                </table>
                <hr class="space m" />
                <div class="btn-group social-group btn-group-icons">
                    <a target="_blank" href="#" data-social="share-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <i class="fa fa-facebook text-s"></i>
                    </a>
                    <a target="_blank" href="#" data-social="share-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <i class="fa fa-twitter text-s"></i>
                    </a>
                    <a target="_blank" href="#" data-social="share-google" data-toggle="tooltip" data-placement="top" title="Google+">
                        <i class="fa fa-google-plus text-s"></i>
                    </a>
                    <a target="_blank" href="#" data-social="share-linkedin" data-toggle="tooltip" data-placement="top" title="LinkedIn">
                        <i class="fa fa-linkedin text-s"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
