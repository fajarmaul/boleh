
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3><strong>BOLEH </strong> (Bogor Oleh-Oleh)</h3>
          <h5>A Site for Your Best Local Food and Merchandise Crave</h5>
        </div>
        <div class="panel-body">
          <div class="intro-message">
            <hr class="intro-divider">
            <center>
            <ul class="list-inline intro-social-buttons">
                <li>
                    <a href="{{ url('/oleh-oleh') }}" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Oleh-Oleh</span></a>
                </li>

                <li>
                    <a href="{{ url('/makanan') }}" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Makanan</span></a>
                </li>
            </ul>
            </center>
            <div class="row">
              <center>
              @if(isset($items))
                @forelse($items as $item)
                  <div class="col-md-6">
                      @include('items.thumbnail', ['item' => $item])
                  </div>
                @empty
                    <h1> :( </h1>
                    <p>Opps, item tidak ditemukan</p>
                @endforelse
              @else
                  <h1> :( </h1>
                  <p>Opps, item tidak ditemukan</p>
              @endif
              </center>
            </div>
            @if(isset($items))
            <div class="pull-right">
              {{ $items->links() }}
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
@endsection
