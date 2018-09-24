@extends('Shared.layout')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="media">
                        <div class="media-middle media-left">
                      <span class="bg-primary-inverse circle sq-48">
                        <span class="icon icon-works">&#80;</span>
                      </span>
                        </div>
                        <div class="media-middle media-body">
                            <h6 class="media-heading">Proyectos Encargados</h6>
                            <h3 class="media-heading">
                                <span class="fw-l">1,031,760</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-danger">
                <div class="card-body">
                    <div class="media">
                        <div class="media-middle media-left">
                      <span class="bg-danger-inverse circle sq-48">
                        <span class="icon icon-works">&#93;</span>
                      </span>
                        </div>
                        <div class="media-middle media-body">
                            <h6 class="media-heading">Tareas Realizadas</h6>
                            <h3 class="media-heading">
                                <span class="fw-l">1,256 Items</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="media">
                        <div class="media-middle media-left">
                      <span class="bg-primary-inverse circle sq-48">
                        <span class="icon icon-works">&#105;</span>
                      </span>
                        </div>
                        <div class="media-middle media-body">
                            <h6 class="media-heading">Tareas Pendientes</h6>
                            <h3 class="media-heading">
                                <span class="fw-l">00:07:56</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-info">
                    <strong>Progreso de Proyecto - XXXX</strong>
                </div>
                <div class="card-body" data-toggle="match-height">
                    <ul class="list-group list-group-divided">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-middle media-body">
                                    <h6 class="media-heading">
                                        <span>Direct</span>
                                    </h6>
                                    <h4 class="media-heading">67%
                                        <small>124,029</small>
                                    </h4>
                                </div>
                                <div class="media-middle media-right">
                              <span class="bg-primary circle sq-40">
                                <span class="icon icon-arrow-right"></span>
                              </span>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-middle media-body">
                                    <h6 class="media-heading">
                                        <span>Referrals</span>
                                    </h6>
                                    <h4 class="media-heading">21%
                                        <small>38,875</small>
                                    </h4>
                                </div>
                                <div class="media-middle media-right">
                              <span class="bg-primary circle sq-40">
                                <span class="icon icon-link"></span>
                              </span>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-middle media-body">
                                    <h6 class="media-heading">
                                        <span>Search Engines</span>
                                    </h6>
                                </div>
                                <div class="media-middle media-right">
                              <span class="bg-danger circle sq-40">
                                <span class="icon icon-question"></span>
                              </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop