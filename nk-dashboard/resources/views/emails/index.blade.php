@extends('layouts.app')
@section('content')
    <div>
        <h1>Inbox</h1>
    </div>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <!-- COMPOSE-BTN -->
                <a href="compose.html" class="btn btn-warning btn-block rounded-pill font-weight-bold mb-3">
                    Compose
                    <i class="fas fa-plus"></i>
                </a>
                <div class="card card-warning card-outline bg-dark">
                    <div class="card-header">
                        <h3 class="card-title">Emails</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-inbox"></i> Inbox
                                    <span class="badge bg-warning float-right">12</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-envelope"></i> Sent
                                    <span class="badge bg-warning float-right">12</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-trash-alt"></i> Trash
                                    <span class="badge bg-warning float-right">12</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /COMPOSE-BTN -->
            </div>
            <div class="col-md-9">
                <div class="card card-warning card-outline bg-dark">
                    <!-- INBOX-HEADER -->
                    <div class="card-header">
                        <h3 class="card-title">Inbox</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Search Mail">
                                <div class="input-group-append">
                                    <div class="btn btn-warning">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /INBOX-HEADER -->
                    <!-- INBOX-MAIL-BOX -->
                    <div class="card-body p-0">
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="mailbox-name">
                                            <a href="#" class="text-warning">Alexander Pierce</a>
                                        </td>
                                        <td class="mailbox-subject">
                                            <b>AdminLTE 3.0 Issue</b>
                                        </td>
                                        <td class="mailbox-message">Trying to find a solution to this problem...</td>
                                        <td class="mailbox-attachment">
                                            <i class="fas fa-paperclip"></i>
                                        </td>
                                        <td class="mailbox-date">5 mins ago</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- INBOX-PAGINATION -->
                        <div class="card-footer p-0">
                            <div class="mailbox-controls">
                                <div class="float-right">
                                    1-50/200
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning btn-sm">
                                            <i class="fas fa-chevron-left"></i>
                                        </button>
                                        <button type="button" class="btn btn-warning btn-sm">
                                            <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /INBOX-PAGINATION -->
                    </div>
                    <!-- /INBOX-MAIL-BOX -->
                </div>
            </div>
    </section>
@endsection
