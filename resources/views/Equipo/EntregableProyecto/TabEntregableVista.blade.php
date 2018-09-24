<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Entregables Disponibles</label>
            <select class="form-control select2" id="EntregableProyecto"></select>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-actions">
                    <button type="button" class="card-action card-toggler" title="Collapse"></button>
                    <button type="button" class="card-action card-reload" title="Reload"></button>
                    <button type="button" class="card-action card-remove" title="Remove"></button>
                </div>
                <strong>Bordered Table (+striped)</strong>
            </div>
            <div class="card-body" data-toggle="match-height">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="text-left">#</th>
                        <th class="text-left">Campaign Name</th>
                        <th class="text-right">Link Clicks</th>
                        <th class="text-right">Reach</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">1</td>
                        <td class="text-left"><a href="#">Website traffic</a></td>
                        <td class="text-right">11,706</td>
                        <td class="text-right">58,530</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown"
                                        type="button">
                                    More
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="disabled"><a href="#">Turn On</a></li>
                                    <li><a href="#">Turn Off</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Delete...</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">2</td>
                        <td class="text-left"><a href="#">Remarketing</a></td>
                        <td class="text-right">15,860</td>
                        <td class="text-right">79,300</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown"
                                        type="button">
                                    More
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="disabled"><a href="#">Turn On</a></li>
                                    <li><a href="#">Turn Off</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Delete...</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">3</td>
                        <td class="text-left"><a href="#">Page Likes</a></td>
                        <td class="text-right">11,688</td>
                        <td class="text-right">58,440</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown"
                                        type="button">
                                    More
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="disabled"><a href="#">Turn On</a></li>
                                    <li><a href="#">Turn Off</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Delete...</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">4</td>
                        <td class="text-left"><a href="#">Email Signups</a></td>
                        <td class="text-right">13,049</td>
                        <td class="text-right">65,245</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown"
                                        type="button">
                                    More
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="disabled"><a href="#">Turn On</a></li>
                                    <li><a href="#">Turn Off</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Delete...</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">5</td>
                        <td class="text-left"><a href="#">Product catalog</a></td>
                        <td class="text-right">18,884</td>
                        <td class="text-right">94,423</td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown"
                                        type="button">
                                    More
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="disabled"><a href="#">Turn On</a></li>
                                    <li><a href="#">Turn Off</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Delete...</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <label for="">Lista de Entregables - Proyecto</label>
        <div class="card">
            <div class="card-body table-responsive">
                <table id="tabla" class="table table-striped  table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                </table>
            </div>
        </div>
    </div>
</div>