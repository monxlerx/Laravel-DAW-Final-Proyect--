@extends('includes.dashboard-template')

@section('sidebar')

<aside class="main-sidebar sidebar-light-primary elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link">
        <img src="{{asset('images/logo_leon.png')}}" alt="Logo_Holyrood English School" class="brand-image img-circle elevation-3"
               style="opacity: 0.8">
          <span class="brand-text font-weight-light">Holyrood English Sch.</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="{{asset('images/icons-backend/user.png')}}" alt="user_Image" width="25" class="img-circle elevation-2">
            </div>
            <div class="info">
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                   <li class="nav-item">
                    <a href="{{route('dashboards.teacher')}}" class="nav-link">
                    <img src="{{asset('images/icons-backend/home.png')}}" alt="dashboard_icon" width="25">
                      <p>
                        Dashboard
                      </p>
                    </a>
                  </li>
                   <li class="nav-item">
                   <a href="{{route('classes.index')}}" class="nav-link">
                    <img src="{{asset('images/icons-backend/classroom.png')}}" alt="classroom_icon" width="25">
                      <p>
                        Classes
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('feedbacks.index')}}" class="nav-link">
                    <img src="{{asset('images/icons-backend/feedback.png')}}" alt="feedback_icon" width="25">
                        <p>
                        Feedbacks
                      </p>
                    </a>
                  </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

@endsection

@section('title')

@endsection

@section('content')

<style>
    .Card {
      display: flex;
      justify-content: center;
      text-align: center;
      margin: auto;
      width: 54rem;
      min-height: 34rem;
      border-radius: 15px;
    }
  
    #logo_back {
      margin-top: 25px;
      font-size: 21px;
      text-align: center;
  
      -webkit-animation: fadein 2s;
      /* Safari, Chrome and Opera > 12.1 */
      -moz-animation: fadein 2s;
      /* Firefox < 16 */
      -ms-animation: fadein 2s;
      /* Internet Explorer */
      -o-animation: fadein 2s;
      /* Opera < 12.1 */
      animation: fadein 2s;
    }
  
    @keyframes fadein {
      from {
        opacity: 0;
      }
  
      to {
        opacity: 1;
      }
    }
  
    /* Firefox < 16 */
    @-moz-keyframes fadein {
      from {
        opacity: 0;
      }
  
      to {
        opacity: 1;
      }
    }
  
    /* Safari, Chrome and Opera > 12.1 */
    @-webkit-keyframes fadein {
      from {
        opacity: 0;
      }
  
      to {
        opacity: 1;
      }
    }
  
    /* Internet Explorer */
    @-ms-keyframes fadein {
      from {
        opacity: 0;
      }
  
      to {
        opacity: 1;
      }
    }
  
    /* Opera < 12.1 */
    @-o-keyframes fadein {
      from {
        opacity: 0;
      }
  
      to {
        opacity: 1;
      }
    }
  </style>
  
  <div class="container Card" id="logo_back">
    <div class="row">
      <div class="col-12">
        <img src="{{asset('images/logo_back-removebg.png')}}" alt="logo_back" width="700">
  
      </div>
    </div>
  </div>

@endsection
