@extends('admin.layouts.master')
@section('title')
Groomly | Dashboard
@endsection
@push('styles')
@endpush

@section('content')
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card radius-15 overflow-hidden">
                        <div class="card-body" style="position: relative;">
                            <div class="d-flex">
                                <div>
                                    <p class="mb-0 font-weight-bold">Sessions</p>
                                    <h2 class="mb-0">501</h2>
                                </div>
                                <div class="ms-auto align-self-end">
                                    <p class="mb-0 font-14 text-primary"><i class="bx bxs-up-arrow-circle"></i> <span>1.01% 31 days ago</span>
                                    </p>
                                </div>
                            </div>
                            <div id="chart1" style="min-height: 80px;">
                                <div id="apexcharts5v893bvf" class="apexcharts-canvas apexcharts5v893bvf apexcharts-theme-light" style="width: 402px; height: 80px;"><svg id="SvgjsSvg1006" width="402" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                            <defs id="SvgjsDefs1007">
                                                <clipPath id="gridRectMask5v893bvf">
                                                    <rect id="SvgjsRect1013" width="409" height="83" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMask5v893bvf">
                                                    <rect id="SvgjsRect1014" width="406" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1020" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1021" stop-opacity="0.65" stop-color="rgba(103,58,183,0.65)" offset="0"></stop>
                                                    <stop id="SvgjsStop1022" stop-opacity="0.5" stop-color="rgba(179,157,219,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1023" stop-opacity="0.5" stop-color="rgba(179,157,219,0.5)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1012" x1="100" y1="0" x2="100" y2="80" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="100" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG1026" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1027" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG1029" class="apexcharts-grid">
                                                <g id="SvgjsG1030" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                    <line id="SvgjsLine1032" x1="0" y1="0" x2="402" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1033" x1="0" y1="20" x2="402" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1034" x1="0" y1="40" x2="402" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1035" x1="0" y1="60" x2="402" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1036" x1="0" y1="80" x2="402" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1031" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                <line id="SvgjsLine1038" x1="0" y1="80" x2="402" y2="80" stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1037" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG1016" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1017" class="apexcharts-series" seriesName="Audience" data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1024" d="M0 80L0 80C17.5875 80 32.6625 58.7 50.25 58.7C67.8375 58.7 82.9125 29.9 100.5 29.9C118.0875 29.9 133.1625 54.3 150.75 54.3C168.3375 54.3 183.4125 29.5 201 29.5C218.5875 29.5 233.6625 38.6 251.25 38.6C268.8375 38.6 283.9125 19.9 301.5 19.9C319.0875 19.9 334.1625 56 351.75 56C369.3375 56 384.4125 80 402 80C402 80 402 80 402 80M402 80C402 80 402 80 402 80 " fill="url(#SvgjsLinearGradient1020)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask5v893bvf)" pathTo="M 0 80L 0 80C 17.5875 80 32.6625 58.7 50.25 58.7C 67.8375 58.7 82.9125 29.9 100.5 29.9C 118.0875 29.9 133.1625 54.3 150.75 54.3C 168.3375 54.3 183.4125 29.5 201 29.5C 218.5875 29.5 233.6625 38.6 251.25 38.6C 268.8375 38.6 283.9125 19.9 301.5 19.9C 319.0875 19.9 334.1625 56 351.75 56C 369.3375 56 384.4125 80 402 80C 402 80 402 80 402 80M 402 80z" pathFrom="M -1 80L -1 80L 50.25 80L 100.5 80L 150.75 80L 201 80L 251.25 80L 301.5 80L 351.75 80L 402 80"></path>
                                                    <path id="SvgjsPath1025" d="M0 80C17.5875 80 32.6625 58.7 50.25 58.7C67.8375 58.7 82.9125 29.9 100.5 29.9C118.0875 29.9 133.1625 54.3 150.75 54.3C168.3375 54.3 183.4125 29.5 201 29.5C218.5875 29.5 233.6625 38.6 251.25 38.6C268.8375 38.6 283.9125 19.9 301.5 19.9C319.0875 19.9 334.1625 56 351.75 56C369.3375 56 384.4125 80 402 80C402 80 402 80 402 80 " fill="none" fill-opacity="1" stroke="#673ab7" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask5v893bvf)" pathTo="M 0 80C 17.5875 80 32.6625 58.7 50.25 58.7C 67.8375 58.7 82.9125 29.9 100.5 29.9C 118.0875 29.9 133.1625 54.3 150.75 54.3C 168.3375 54.3 183.4125 29.5 201 29.5C 218.5875 29.5 233.6625 38.6 251.25 38.6C 268.8375 38.6 283.9125 19.9 301.5 19.9C 319.0875 19.9 334.1625 56 351.75 56C 369.3375 56 384.4125 80 402 80" pathFrom="M -1 80L -1 80L 50.25 80L 100.5 80L 150.75 80L 201 80L 251.25 80L 301.5 80L 351.75 80L 402 80"></path>
                                                    <g id="SvgjsG1018" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1044" r="0" cx="100.5" cy="29.9" class="apexcharts-marker wc83yrdhu no-pointer-events" stroke="#ffffff" fill="#673ab7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1019" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1039" x1="0" y1="0" x2="402" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1040" x1="0" y1="0" x2="402" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1041" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1042" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1043" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <rect id="SvgjsRect1011" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG1028" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG1009" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-dark" style="left: 112.5px; top: 33.4px;">
                                        <div class="apexcharts-tooltip-series-group apexcharts-active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(103, 58, 183); display: none;"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value">501</span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 435px; height: 172px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card radius-15 overflow-hidden">
                        <div class="card-body" style="position: relative;">
                            <div class="d-flex">
                                <div>
                                    <p class="mb-0 font-weight-bold">Visitors</p>
                                    <h2 class="mb-0">409</h2>
                                </div>
                                <div class="ms-auto align-self-end">
                                    <p class="mb-0 font-14 text-success"><i class="bx bxs-up-arrow-circle"></i> <span>0.49% 31 days ago</span>
                                    </p>
                                </div>
                            </div>
                            <div id="chart2" style="min-height: 80px;">
                                <div id="apexchartsqjm66gixh" class="apexcharts-canvas apexchartsqjm66gixh apexcharts-theme-light" style="width: 402px; height: 80px;"><svg id="SvgjsSvg1045" width="402" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG1047" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                            <defs id="SvgjsDefs1046">
                                                <clipPath id="gridRectMaskqjm66gixh">
                                                    <rect id="SvgjsRect1052" width="409" height="83" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskqjm66gixh">
                                                    <rect id="SvgjsRect1053" width="406" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1059" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1060" stop-opacity="0.65" stop-color="rgba(50,171,19,0.65)" offset="0"></stop>
                                                    <stop id="SvgjsStop1061" stop-opacity="0.5" stop-color="rgba(153,213,137,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1062" stop-opacity="0.5" stop-color="rgba(153,213,137,0.5)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1051" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG1065" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1066" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG1068" class="apexcharts-grid">
                                                <g id="SvgjsG1069" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                    <line id="SvgjsLine1071" x1="0" y1="0" x2="402" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1072" x1="0" y1="20" x2="402" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1073" x1="0" y1="40" x2="402" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1074" x1="0" y1="60" x2="402" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1075" x1="0" y1="80" x2="402" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1070" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                <line id="SvgjsLine1077" x1="0" y1="80" x2="402" y2="80" stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1076" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG1055" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1056" class="apexcharts-series" seriesName="Impressions" data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1063" d="M0 80L0 80C17.5875 80 32.6625 58.7 50.25 58.7C67.8375 58.7 82.9125 29.9 100.5 29.9C118.0875 29.9 133.1625 54.3 150.75 54.3C168.3375 54.3 183.4125 29.5 201 29.5C218.5875 29.5 233.6625 38.6 251.25 38.6C268.8375 38.6 283.9125 19.9 301.5 19.9C319.0875 19.9 334.1625 56 351.75 56C369.3375 56 384.4125 80 402 80C402 80 402 80 402 80M402 80C402 80 402 80 402 80 " fill="url(#SvgjsLinearGradient1059)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqjm66gixh)" pathTo="M 0 80L 0 80C 17.5875 80 32.6625 58.7 50.25 58.7C 67.8375 58.7 82.9125 29.9 100.5 29.9C 118.0875 29.9 133.1625 54.3 150.75 54.3C 168.3375 54.3 183.4125 29.5 201 29.5C 218.5875 29.5 233.6625 38.6 251.25 38.6C 268.8375 38.6 283.9125 19.9 301.5 19.9C 319.0875 19.9 334.1625 56 351.75 56C 369.3375 56 384.4125 80 402 80C 402 80 402 80 402 80M 402 80z" pathFrom="M -1 80L -1 80L 50.25 80L 100.5 80L 150.75 80L 201 80L 251.25 80L 301.5 80L 351.75 80L 402 80"></path>
                                                    <path id="SvgjsPath1064" d="M0 80C17.5875 80 32.6625 58.7 50.25 58.7C67.8375 58.7 82.9125 29.9 100.5 29.9C118.0875 29.9 133.1625 54.3 150.75 54.3C168.3375 54.3 183.4125 29.5 201 29.5C218.5875 29.5 233.6625 38.6 251.25 38.6C268.8375 38.6 283.9125 19.9 301.5 19.9C319.0875 19.9 334.1625 56 351.75 56C369.3375 56 384.4125 80 402 80C402 80 402 80 402 80 " fill="none" fill-opacity="1" stroke="#32ab13" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqjm66gixh)" pathTo="M 0 80C 17.5875 80 32.6625 58.7 50.25 58.7C 67.8375 58.7 82.9125 29.9 100.5 29.9C 118.0875 29.9 133.1625 54.3 150.75 54.3C 168.3375 54.3 183.4125 29.5 201 29.5C 218.5875 29.5 233.6625 38.6 251.25 38.6C 268.8375 38.6 283.9125 19.9 301.5 19.9C 319.0875 19.9 334.1625 56 351.75 56C 369.3375 56 384.4125 80 402 80" pathFrom="M -1 80L -1 80L 50.25 80L 100.5 80L 150.75 80L 201 80L 251.25 80L 301.5 80L 351.75 80L 402 80"></path>
                                                    <g id="SvgjsG1057" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1083" r="0" cx="0" cy="0" class="apexcharts-marker wu9wtg3tq no-pointer-events" stroke="#ffffff" fill="#32ab13" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1058" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1078" x1="0" y1="0" x2="402" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1079" x1="0" y1="0" x2="402" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1080" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1081" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1082" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <rect id="SvgjsRect1050" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG1067" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG1048" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                        <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(50, 171, 19);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 435px; height: 172px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card radius-15 overflow-hidden">
                        <div class="card-body" style="position: relative;">
                            <div class="d-flex">
                                <div>
                                    <p class="mb-0 font-weight-bold">Page Views</p>
                                    <h2 class="mb-0">2,346</h2>
                                </div>
                                <div class="ms-auto align-self-end">
                                    <p class="mb-0 font-14 text-danger"><i class="bx bxs-down-arrow-circle"></i> <span>130.68% 31 days ago</span>
                                    </p>
                                </div>
                            </div>
                            <div id="chart3" style="min-height: 80px;">
                                <div id="apexchartsyjssykt" class="apexcharts-canvas apexchartsyjssykt apexcharts-theme-light" style="width: 402px; height: 80px;"><svg id="SvgjsSvg1084" width="402" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG1086" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                            <defs id="SvgjsDefs1085">
                                                <clipPath id="gridRectMaskyjssykt">
                                                    <rect id="SvgjsRect1091" width="409" height="83" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskyjssykt">
                                                    <rect id="SvgjsRect1092" width="406" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1098" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1099" stop-opacity="0.65" stop-color="rgba(240,39,105,0.65)" offset="0"></stop>
                                                    <stop id="SvgjsStop1100" stop-opacity="0.5" stop-color="rgba(248,147,180,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1101" stop-opacity="0.5" stop-color="rgba(248,147,180,0.5)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1090" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG1104" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1105" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG1107" class="apexcharts-grid">
                                                <g id="SvgjsG1108" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                    <line id="SvgjsLine1110" x1="0" y1="0" x2="402" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1111" x1="0" y1="20" x2="402" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1112" x1="0" y1="40" x2="402" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1113" x1="0" y1="60" x2="402" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1114" x1="0" y1="80" x2="402" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1109" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                <line id="SvgjsLine1116" x1="0" y1="80" x2="402" y2="80" stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1115" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG1094" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1095" class="apexcharts-series" seriesName="Engagement" data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1102" d="M0 80L0 80C17.5875 80 32.6625 58.7 50.25 58.7C67.8375 58.7 82.9125 29.9 100.5 29.9C118.0875 29.9 133.1625 54.3 150.75 54.3C168.3375 54.3 183.4125 29.5 201 29.5C218.5875 29.5 233.6625 38.6 251.25 38.6C268.8375 38.6 283.9125 19.9 301.5 19.9C319.0875 19.9 334.1625 56 351.75 56C369.3375 56 384.4125 80 402 80C402 80 402 80 402 80M402 80C402 80 402 80 402 80 " fill="url(#SvgjsLinearGradient1098)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskyjssykt)" pathTo="M 0 80L 0 80C 17.5875 80 32.6625 58.7 50.25 58.7C 67.8375 58.7 82.9125 29.9 100.5 29.9C 118.0875 29.9 133.1625 54.3 150.75 54.3C 168.3375 54.3 183.4125 29.5 201 29.5C 218.5875 29.5 233.6625 38.6 251.25 38.6C 268.8375 38.6 283.9125 19.9 301.5 19.9C 319.0875 19.9 334.1625 56 351.75 56C 369.3375 56 384.4125 80 402 80C 402 80 402 80 402 80M 402 80z" pathFrom="M -1 80L -1 80L 50.25 80L 100.5 80L 150.75 80L 201 80L 251.25 80L 301.5 80L 351.75 80L 402 80"></path>
                                                    <path id="SvgjsPath1103" d="M0 80C17.5875 80 32.6625 58.7 50.25 58.7C67.8375 58.7 82.9125 29.9 100.5 29.9C118.0875 29.9 133.1625 54.3 150.75 54.3C168.3375 54.3 183.4125 29.5 201 29.5C218.5875 29.5 233.6625 38.6 251.25 38.6C268.8375 38.6 283.9125 19.9 301.5 19.9C319.0875 19.9 334.1625 56 351.75 56C369.3375 56 384.4125 80 402 80C402 80 402 80 402 80 " fill="none" fill-opacity="1" stroke="#f02769" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskyjssykt)" pathTo="M 0 80C 17.5875 80 32.6625 58.7 50.25 58.7C 67.8375 58.7 82.9125 29.9 100.5 29.9C 118.0875 29.9 133.1625 54.3 150.75 54.3C 168.3375 54.3 183.4125 29.5 201 29.5C 218.5875 29.5 233.6625 38.6 251.25 38.6C 268.8375 38.6 283.9125 19.9 301.5 19.9C 319.0875 19.9 334.1625 56 351.75 56C 369.3375 56 384.4125 80 402 80" pathFrom="M -1 80L -1 80L 50.25 80L 100.5 80L 150.75 80L 201 80L 251.25 80L 301.5 80L 351.75 80L 402 80"></path>
                                                    <g id="SvgjsG1096" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1122" r="0" cx="0" cy="0" class="apexcharts-marker wy66hv46h no-pointer-events" stroke="#ffffff" fill="#f02769" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1097" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1117" x1="0" y1="0" x2="402" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1118" x1="0" y1="0" x2="402" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1119" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1120" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1121" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <rect id="SvgjsRect1089" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG1106" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG1087" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                        <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(240, 39, 105);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 435px; height: 172px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12 col-lg-8 d-flex">
                    <div class="card radius-15 w-100">
                        <div class="card-header border-bottom-0">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mb-lg-0">New VS Returning Visitors</h5>
                                </div>
                                <div class="ms-auto mb-2 mb-lg-0">
                                    <div class="btn-group-round">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-white">This Month</button>
                                            <button type="button" class="btn btn-white dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javaScript:;">This Week</a>
                                                <a class="dropdown-item" href="javaScript:;">This Year</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="position: relative;">
                            <div id="chart4" style="min-height: 365px;">
                                <div id="apexcharts3uttcjxs" class="apexcharts-canvas apexcharts3uttcjxs apexcharts-theme-light" style="width: 861px; height: 350px;"><svg id="SvgjsSvg1307" width="861" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <foreignObject x="0" y="0" width="861" height="350">
                                            <div class="apexcharts-legend apexcharts-align-left position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 0px;">
                                                <div class="apexcharts-legend-series apexcharts-inactive-legend" rel="1" data:collapsed="true" style="margin: 0px 5px;"><span class="apexcharts-legend-marker apexcharts-inactive-legend" rel="1" data:collapsed="true" style="background: rgb(98, 54, 175); color: rgb(98, 54, 175); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="New%20Visitors" data:collapsed="true" style="color: rgb(154, 151, 151); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">New Visitors</span></div>
                                                <div class="apexcharts-legend-series" rel="2" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(240, 39, 105); color: rgb(240, 39, 105); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Returning%20Visitors" data:collapsed="false" style="color: rgb(154, 151, 151); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Returning Visitors</span></div>
                                            </div>
                                            <style type="text/css">
                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }

                                                .apexcharts-legend.position-bottom,
                                                .apexcharts-legend.position-top {
                                                    flex-wrap: wrap
                                                }

                                                .apexcharts-legend.position-right,
                                                .apexcharts-legend.position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }

                                                .apexcharts-legend.position-bottom.apexcharts-align-left,
                                                .apexcharts-legend.position-top.apexcharts-align-left,
                                                .apexcharts-legend.position-right,
                                                .apexcharts-legend.position-left {
                                                    justify-content: flex-start;
                                                }

                                                .apexcharts-legend.position-bottom.apexcharts-align-center,
                                                .apexcharts-legend.position-top.apexcharts-align-center {
                                                    justify-content: center;
                                                }

                                                .apexcharts-legend.position-bottom.apexcharts-align-right,
                                                .apexcharts-legend.position-top.apexcharts-align-right {
                                                    justify-content: flex-end;
                                                }

                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                }

                                                .apexcharts-legend.position-bottom .apexcharts-legend-series,
                                                .apexcharts-legend.position-top .apexcharts-legend-series {
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }

                                                .apexcharts-legend-text *,
                                                .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }

                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: inline-block;
                                                    cursor: pointer;
                                                    margin-right: 3px;
                                                    border-style: solid;
                                                }

                                                .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                    display: inline-block;
                                                }

                                                .apexcharts-legend-series.apexcharts-no-click {
                                                    cursor: auto;
                                                }

                                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                                .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }

                                                .apexcharts-inactive-legend {
                                                    opacity: 0.45;
                                                }
                                            </style>
                                        </foreignObject>
                                        <g id="SvgjsG1309" class="apexcharts-inner apexcharts-graphical" transform="translate(49.421875, 47)">
                                            <defs id="SvgjsDefs1308">
                                                <linearGradient id="SvgjsLinearGradient1313" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1314" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1315" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1316" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMask3uttcjxs">
                                                    <rect id="SvgjsRect1318" width="807.578125" height="267.348" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMask3uttcjxs">
                                                    <rect id="SvgjsRect1319" width="805.578125" height="269.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1317" width="9.618937500000001" height="265.348" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1313)" class="apexcharts-xcrosshairs" y2="265.348" filter="none" fill-opacity="0.9"></rect>
                                            <g id="SvgjsG1346" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1347" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1349" font-family="Helvetica, Arial, sans-serif" x="36.43536931818182" y="294.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1350">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text><text id="SvgjsText1352" font-family="Helvetica, Arial, sans-serif" x="109.30610795454547" y="294.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1353">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text><text id="SvgjsText1355" font-family="Helvetica, Arial, sans-serif" x="182.17684659090912" y="294.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1356">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text><text id="SvgjsText1358" font-family="Helvetica, Arial, sans-serif" x="255.04758522727275" y="294.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1359">May</tspan>
                                                        <title>May</title>
                                                    </text><text id="SvgjsText1361" font-family="Helvetica, Arial, sans-serif" x="327.9183238636364" y="294.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1362">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text><text id="SvgjsText1364" font-family="Helvetica, Arial, sans-serif" x="400.7890625" y="294.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1365">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text><text id="SvgjsText1367" font-family="Helvetica, Arial, sans-serif" x="473.6598011363636" y="294.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1368">Aug</tspan>
                                                        <title>Aug</title>
                                                    </text><text id="SvgjsText1370" font-family="Helvetica, Arial, sans-serif" x="546.5305397727273" y="294.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1371">Sep</tspan>
                                                        <title>Sep</title>
                                                    </text><text id="SvgjsText1373" font-family="Helvetica, Arial, sans-serif" x="619.4012784090909" y="294.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1374">Oct</tspan>
                                                        <title>Oct</title>
                                                    </text><text id="SvgjsText1376" font-family="Helvetica, Arial, sans-serif" x="692.2720170454545" y="294.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1377">Nov</tspan>
                                                        <title>Nov</title>
                                                    </text><text id="SvgjsText1379" font-family="Helvetica, Arial, sans-serif" x="765.1427556818181" y="294.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1380">Dec</tspan>
                                                        <title>Dec</title>
                                                    </text></g>
                                                <line id="SvgjsLine1381" x1="0" y1="266.348" x2="801.578125" y2="266.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line>
                                            </g>
                                            <g id="SvgjsG1394" class="apexcharts-grid">
                                                <g id="SvgjsG1395" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1409" x1="0" y1="0" x2="801.578125" y2="0" stroke="#ededed" stroke-dasharray="4" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1410" x1="0" y1="66.337" x2="801.578125" y2="66.337" stroke="#ededed" stroke-dasharray="4" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1411" x1="0" y1="132.674" x2="801.578125" y2="132.674" stroke="#ededed" stroke-dasharray="4" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1412" x1="0" y1="199.01100000000002" x2="801.578125" y2="199.01100000000002" stroke="#ededed" stroke-dasharray="4" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1413" x1="0" y1="265.348" x2="801.578125" y2="265.348" stroke="#ededed" stroke-dasharray="4" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1396" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1397" x1="0" y1="266.348" x2="0" y2="272.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1398" x1="72.87073863636364" y1="266.348" x2="72.87073863636364" y2="272.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1399" x1="145.74147727272728" y1="266.348" x2="145.74147727272728" y2="272.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1400" x1="218.61221590909093" y1="266.348" x2="218.61221590909093" y2="272.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1401" x1="291.48295454545456" y1="266.348" x2="291.48295454545456" y2="272.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1402" x1="364.3536931818182" y1="266.348" x2="364.3536931818182" y2="272.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1403" x1="437.2244318181818" y1="266.348" x2="437.2244318181818" y2="272.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1404" x1="510.09517045454544" y1="266.348" x2="510.09517045454544" y2="272.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1405" x1="582.9659090909091" y1="266.348" x2="582.9659090909091" y2="272.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1406" x1="655.8366477272727" y1="266.348" x2="655.8366477272727" y2="272.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1407" x1="728.7073863636364" y1="266.348" x2="728.7073863636364" y2="272.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1408" x1="801.578125" y1="266.348" x2="801.578125" y2="272.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine1415" x1="0" y1="265.348" x2="801.578125" y2="265.348" stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1414" x1="0" y1="1" x2="0" y2="265.348" stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG1321" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1322" class="apexcharts-series apexcharts-series-collapsed" seriesName="NewxVisitors" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1324" d="M35.2694375 0L35.2694375 0Q39.07890625 0 42.888375 0L42.888375 0L42.888375 0L42.888375 0L35.2694375 0C35.2694375 0 35.2694375 0 35.2694375 0C35.2694375 0 35.2694375 0 35.2694375 0C35.2694375 0 35.2694375 0 35.2694375 0C35.2694375 0 35.2694375 0 35.2694375 0C35.2694375 0 35.2694375 0 35.2694375 0 " fill="rgba(98,54,175,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 35.2694375 0L 35.2694375 0Q 39.07890625 0 42.888375 0L 42.888375 0L 42.888375 0L 42.888375 0z" pathFrom="M 35.2694375 106.53920000000002L 35.2694375 7.797086375000017Q 39.07890625 4.987617625000016 42.888375 7.797086375000017L 42.888375 7.797086375000017L 42.888375 106.53920000000002L 42.888375 106.53920000000002zL 35.2694375 0L 42.888375 0L 42.888375 0L 42.888375 0L 35.2694375 0" cy="0" cx="114.42725000000002" j="0" val="0" barHeight="0" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1325" d="M115.42725000000002 0L115.42725000000002 0Q119.23671875000002 0 123.04618750000002 0L123.04618750000002 0L123.04618750000002 0L123.04618750000002 0L115.42725000000002 0C115.42725000000002 0 115.42725000000002 0 115.42725000000002 0C115.42725000000002 0 115.42725000000002 0 115.42725000000002 0C115.42725000000002 0 115.42725000000002 0 115.42725000000002 0C115.42725000000002 0 115.42725000000002 0 115.42725000000002 0C115.42725000000002 0 115.42725000000002 0 115.42725000000002 0 " fill="rgba(98,54,175,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 115.42725000000002 0L 115.42725000000002 0Q 119.23671875000002 0 123.04618750000002 0L 123.04618750000002 0L 123.04618750000002 0L 123.04618750000002 0z" pathFrom="M 115.42725000000002 106.53920000000002L 115.42725000000002 49.347374375000015Q 119.23671875000002 46.537905625000015 123.04618750000002 49.347374375000015L 123.04618750000002 49.347374375000015L 123.04618750000002 106.53920000000002L 123.04618750000002 106.53920000000002zL 115.42725000000002 0L 123.04618750000002 0L 123.04618750000002 0L 123.04618750000002 0L 115.42725000000002 0" cy="0" cx="194.58506250000002" j="1" val="0" barHeight="0" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1326" d="M195.58506250000002 0L195.58506250000002 0Q199.39453125000003 0 203.204 0L203.204 0L203.204 0L203.204 0L195.58506250000002 0C195.58506250000002 0 195.58506250000002 0 195.58506250000002 0C195.58506250000002 0 195.58506250000002 0 195.58506250000002 0C195.58506250000002 0 195.58506250000002 0 195.58506250000002 0C195.58506250000002 0 195.58506250000002 0 195.58506250000002 0C195.58506250000002 0 195.58506250000002 0 195.58506250000002 0 " fill="rgba(98,54,175,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 195.58506250000002 0L 195.58506250000002 0Q 199.39453125000003 0 203.204 0L 203.204 0L 203.204 0L 203.204 0z" pathFrom="M 195.58506250000002 106.53920000000002L 195.58506250000002 47.216590375000024Q 199.39453125000003 44.40712162500002 203.204 47.216590375000024L 203.204 47.216590375000024L 203.204 106.53920000000002L 203.204 106.53920000000002zL 195.58506250000002 0L 203.204 0L 203.204 0L 203.204 0L 195.58506250000002 0" cy="0" cx="274.742875" j="2" val="0" barHeight="0" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1327" d="M275.742875 0L275.742875 0Q279.55234375000003 0 283.36181250000004 0L283.36181250000004 0L283.36181250000004 0L283.36181250000004 0L275.742875 0C275.742875 0 275.742875 0 275.742875 0C275.742875 0 275.742875 0 275.742875 0C275.742875 0 275.742875 0 275.742875 0C275.742875 0 275.742875 0 275.742875 0C275.742875 0 275.742875 0 275.742875 0 " fill="rgba(98,54,175,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 275.742875 0L 275.742875 0Q 279.55234375000003 0 283.36181250000004 0L 283.36181250000004 0L 283.36181250000004 0L 283.36181250000004 0z" pathFrom="M 275.742875 106.53920000000002L 275.742875 48.28198237500003Q 279.55234375000003 45.472513625000026 283.36181250000004 48.28198237500003L 283.36181250000004 48.28198237500003L 283.36181250000004 106.53920000000002L 283.36181250000004 106.53920000000002zL 275.742875 0L 283.36181250000004 0L 283.36181250000004 0L 283.36181250000004 0L 275.742875 0" cy="0" cx="354.9006875" j="3" val="0" barHeight="0" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1328" d="M355.9006875 0L355.9006875 0Q359.71015625 0 363.519625 0L363.519625 0L363.519625 0L363.519625 0L355.9006875 0C355.9006875 0 355.9006875 0 355.9006875 0C355.9006875 0 355.9006875 0 355.9006875 0C355.9006875 0 355.9006875 0 355.9006875 0C355.9006875 0 355.9006875 0 355.9006875 0C355.9006875 0 355.9006875 0 355.9006875 0 " fill="rgba(98,54,175,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 355.9006875 0L 355.9006875 0Q 359.71015625 0 363.519625 0L 363.519625 0L 363.519625 0L 363.519625 0z" pathFrom="M 355.9006875 106.53920000000002L 355.9006875 42.95502237500003Q 359.71015625 40.145553625000026 363.519625 42.95502237500003L 363.519625 42.95502237500003L 363.519625 106.53920000000002L 363.519625 106.53920000000002zL 355.9006875 0L 363.519625 0L 363.519625 0L 363.519625 0L 355.9006875 0" cy="0" cx="435.0585" j="4" val="0" barHeight="0" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1329" d="M436.0585 0L436.0585 0Q439.86796875 0 443.6774375 0L443.6774375 0L443.6774375 0L443.6774375 0L436.0585 0C436.0585 0 436.0585 0 436.0585 0C436.0585 0 436.0585 0 436.0585 0C436.0585 0 436.0585 0 436.0585 0C436.0585 0 436.0585 0 436.0585 0C436.0585 0 436.0585 0 436.0585 0 " fill="rgba(98,54,175,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 436.0585 0L 436.0585 0Q 439.86796875 0 443.6774375 0L 443.6774375 0L 443.6774375 0L 443.6774375 0z" pathFrom="M 436.0585 106.53920000000002L 436.0585 46.15119837500002Q 439.86796875 43.34172962500002 443.6774375 46.15119837500002L 443.6774375 46.15119837500002L 443.6774375 106.53920000000002L 443.6774375 106.53920000000002zL 436.0585 0L 443.6774375 0L 443.6774375 0L 443.6774375 0L 436.0585 0" cy="0" cx="515.2163125" j="5" val="0" barHeight="0" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1330" d="M516.2163125 0L516.2163125 0Q520.0257812499999 0 523.83525 0L523.83525 0L523.83525 0L523.83525 0L516.2163125 0C516.2163125 0 516.2163125 0 516.2163125 0C516.2163125 0 516.2163125 0 516.2163125 0C516.2163125 0 516.2163125 0 516.2163125 0C516.2163125 0 516.2163125 0 516.2163125 0C516.2163125 0 516.2163125 0 516.2163125 0 " fill="rgba(98,54,175,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 516.2163125 0L 516.2163125 0Q 520.0257812499999 0 523.83525 0L 523.83525 0L 523.83525 0L 523.83525 0z" pathFrom="M 516.2163125 106.53920000000002L 516.2163125 40.82423837500002Q 520.0257812499999 38.01476962500002 523.83525 40.82423837500002L 523.83525 40.82423837500002L 523.83525 106.53920000000002L 523.83525 106.53920000000002zL 516.2163125 0L 523.83525 0L 523.83525 0L 523.83525 0L 516.2163125 0" cy="0" cx="595.3741249999999" j="6" val="0" barHeight="0" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1331" d="M596.3741249999999 0L596.3741249999999 0Q600.1835937499999 0 603.9930625 0L603.9930625 0L603.9930625 0L603.9930625 0L596.3741249999999 0C596.3741249999999 0 596.3741249999999 0 596.3741249999999 0C596.3741249999999 0 596.3741249999999 0 596.3741249999999 0C596.3741249999999 0 596.3741249999999 0 596.3741249999999 0C596.3741249999999 0 596.3741249999999 0 596.3741249999999 0C596.3741249999999 0 596.3741249999999 0 596.3741249999999 0 " fill="rgba(98,54,175,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 596.3741249999999 0L 596.3741249999999 0Q 600.1835937499999 0 603.9930625 0L 603.9930625 0L 603.9930625 0L 603.9930625 0z" pathFrom="M 596.3741249999999 106.53920000000002L 596.3741249999999 44.020414375000016Q 600.1835937499999 41.210945625000015 603.9930625 44.020414375000016L 603.9930625 44.020414375000016L 603.9930625 106.53920000000002L 603.9930625 106.53920000000002zL 596.3741249999999 0L 603.9930625 0L 603.9930625 0L 603.9930625 0L 596.3741249999999 0" cy="0" cx="675.5319374999999" j="7" val="0" barHeight="0" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1332" d="M676.5319374999999 0L676.5319374999999 0Q680.3414062499999 0 684.1508749999999 0L684.1508749999999 0L684.1508749999999 0L684.1508749999999 0L676.5319374999999 0C676.5319374999999 0 676.5319374999999 0 676.5319374999999 0C676.5319374999999 0 676.5319374999999 0 676.5319374999999 0C676.5319374999999 0 676.5319374999999 0 676.5319374999999 0C676.5319374999999 0 676.5319374999999 0 676.5319374999999 0C676.5319374999999 0 676.5319374999999 0 676.5319374999999 0 " fill="rgba(98,54,175,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 676.5319374999999 0L 676.5319374999999 0Q 680.3414062499999 0 684.1508749999999 0L 684.1508749999999 0L 684.1508749999999 0L 684.1508749999999 0z" pathFrom="M 676.5319374999999 106.53920000000002L 676.5319374999999 37.62806237500003Q 680.3414062499999 34.81859362500003 684.1508749999999 37.62806237500003L 684.1508749999999 37.62806237500003L 684.1508749999999 106.53920000000002L 684.1508749999999 106.53920000000002zL 676.5319374999999 0L 684.1508749999999 0L 684.1508749999999 0L 684.1508749999999 0L 676.5319374999999 0" cy="0" cx="755.6897499999999" j="8" val="0" barHeight="0" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1333" d="M756.6897499999999 0L756.6897499999999 0Q760.4992187499998 0 764.3086874999999 0L764.3086874999999 0L764.3086874999999 0L764.3086874999999 0L756.6897499999999 0C756.6897499999999 0 756.6897499999999 0 756.6897499999999 0C756.6897499999999 0 756.6897499999999 0 756.6897499999999 0C756.6897499999999 0 756.6897499999999 0 756.6897499999999 0C756.6897499999999 0 756.6897499999999 0 756.6897499999999 0C756.6897499999999 0 756.6897499999999 0 756.6897499999999 0 " fill="rgba(98,54,175,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 756.6897499999999 0L 756.6897499999999 0Q 760.4992187499998 0 764.3086874999999 0L 764.3086874999999 0L 764.3086874999999 0L 764.3086874999999 0z" pathFrom="M 756.6897499999999 106.53920000000002L 756.6897499999999 28.039534375000027Q 760.4992187499998 25.230065625000027 764.3086874999999 28.039534375000027L 764.3086874999999 28.039534375000027L 764.3086874999999 106.53920000000002L 764.3086874999999 106.53920000000002zL 756.6897499999999 0L 764.3086874999999 0L 764.3086874999999 0L 764.3086874999999 0L 756.6897499999999 0" cy="0" cx="835.8475624999999" j="9" val="0" barHeight="0" barWidth="9.618937500000001"></path>
                                                </g>
                                                <g id="SvgjsG1334" class="apexcharts-series" seriesName="ReturningxVisitors" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath1336" d="M35.2694375 0L35.2694375 164.64899895833335Q39.07890625 171.45846770833336 42.888375 164.64899895833335L42.888375 164.64899895833335L42.888375 0L42.888375 0L35.2694375 0C35.2694375 0 35.2694375 0 35.2694375 0C35.2694375 0 35.2694375 0 35.2694375 0C35.2694375 0 35.2694375 0 35.2694375 0C35.2694375 0 35.2694375 0 35.2694375 0C35.2694375 0 35.2694375 0 35.2694375 0 " fill="rgba(240,39,105,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 35.2694375 0L 35.2694375 164.64899895833335Q 39.07890625 171.45846770833336 42.888375 164.64899895833335L 42.888375 164.64899895833335L 42.888375 0L 42.888375 0z" pathFrom="M 35.2694375 106.53920000000002L 35.2694375 184.10425762500003Q 39.07890625 190.91372637500004 42.888375 184.10425762500003L 42.888375 184.10425762500003L 42.888375 106.53920000000002L 42.888375 106.53920000000002zL 35.2694375 0L 42.888375 0L 42.888375 0L 42.888375 0L 35.2694375 0" cy="168.05373333333335" cx="114.42725000000002" j="0" val="-76" barHeight="-168.05373333333335" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1337" d="M115.42725000000002 0L115.42725000000002 184.55009895833334Q119.23671875000002 191.35956770833334 123.04618750000002 184.55009895833334L123.04618750000002 184.55009895833334L123.04618750000002 0L123.04618750000002 0L115.42725000000002 0C115.42725000000002 0 115.42725000000002 0 115.42725000000002 0C115.42725000000002 0 115.42725000000002 0 115.42725000000002 0C115.42725000000002 0 115.42725000000002 0 115.42725000000002 0C115.42725000000002 0 115.42725000000002 0 115.42725000000002 0C115.42725000000002 0 115.42725000000002 0 115.42725000000002 0 " fill="rgba(240,39,105,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 115.42725000000002 0L 115.42725000000002 184.55009895833334Q 119.23671875000002 191.35956770833334 123.04618750000002 184.55009895833334L 123.04618750000002 184.55009895833334L 123.04618750000002 0L 123.04618750000002 0z" pathFrom="M 115.42725000000002 106.53920000000002L 115.42725000000002 193.69278562500003Q 119.23671875000002 200.50225437500004 123.04618750000002 193.69278562500003L 123.04618750000002 193.69278562500003L 123.04618750000002 106.53920000000002L 123.04618750000002 106.53920000000002zL 115.42725000000002 0L 123.04618750000002 0L 123.04618750000002 0L 123.04618750000002 0L 115.42725000000002 0" cy="187.95483333333334" cx="194.58506250000002" j="1" val="-85" barHeight="-187.95483333333334" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1338" d="M195.58506250000002 0L195.58506250000002 219.92983229166668Q199.39453125000003 226.7393010416667 203.204 219.92983229166668L203.204 219.92983229166668L203.204 0L203.204 0L195.58506250000002 0C195.58506250000002 0 195.58506250000002 0 195.58506250000002 0C195.58506250000002 0 195.58506250000002 0 195.58506250000002 0C195.58506250000002 0 195.58506250000002 0 195.58506250000002 0C195.58506250000002 0 195.58506250000002 0 195.58506250000002 0C195.58506250000002 0 195.58506250000002 0 195.58506250000002 0 " fill="rgba(240,39,105,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 195.58506250000002 0L 195.58506250000002 219.92983229166668Q 199.39453125000003 226.7393010416667 203.204 219.92983229166668L 203.204 219.92983229166668L 203.204 0L 203.204 0z" pathFrom="M 195.58506250000002 106.53920000000002L 195.58506250000002 210.73905762500002Q 199.39453125000003 217.54852637500002 203.204 210.73905762500002L 203.204 210.73905762500002L 203.204 106.53920000000002L 203.204 106.53920000000002zL 195.58506250000002 0L 203.204 0L 203.204 0L 203.204 0L 195.58506250000002 0" cy="223.3345666666667" cx="274.742875" j="2" val="-101" barHeight="-223.3345666666667" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1339" d="M275.742875 0L275.742875 213.29613229166668Q279.55234375000003 220.1056010416667 283.36181250000004 213.29613229166668L283.36181250000004 213.29613229166668L283.36181250000004 0L283.36181250000004 0L275.742875 0C275.742875 0 275.742875 0 275.742875 0C275.742875 0 275.742875 0 275.742875 0C275.742875 0 275.742875 0 275.742875 0C275.742875 0 275.742875 0 275.742875 0C275.742875 0 275.742875 0 275.742875 0 " fill="rgba(240,39,105,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 275.742875 0L 275.742875 213.29613229166668Q 279.55234375000003 220.1056010416667 283.36181250000004 213.29613229166668L 283.36181250000004 213.29613229166668L 283.36181250000004 0L 283.36181250000004 0z" pathFrom="M 275.742875 106.53920000000002L 275.742875 207.54288162500004Q 279.55234375000003 214.35235037500004 283.36181250000004 207.54288162500004L 283.36181250000004 207.54288162500004L 283.36181250000004 106.53920000000002L 283.36181250000004 106.53920000000002zL 275.742875 0L 283.36181250000004 0L 283.36181250000004 0L 283.36181250000004 0L 275.742875 0" cy="216.70086666666668" cx="354.9006875" j="3" val="-98" barHeight="-216.70086666666668" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1340" d="M355.9006875 0L355.9006875 188.97256562500002Q359.71015625 195.78203437500002 363.519625 188.97256562500002L363.519625 188.97256562500002L363.519625 0L363.519625 0L355.9006875 0C355.9006875 0 355.9006875 0 355.9006875 0C355.9006875 0 355.9006875 0 355.9006875 0C355.9006875 0 355.9006875 0 355.9006875 0C355.9006875 0 355.9006875 0 355.9006875 0C355.9006875 0 355.9006875 0 355.9006875 0 " fill="rgba(240,39,105,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 355.9006875 0L 355.9006875 188.97256562500002Q 359.71015625 195.78203437500002 363.519625 188.97256562500002L 363.519625 188.97256562500002L 363.519625 0L 363.519625 0z" pathFrom="M 355.9006875 106.53920000000002L 355.9006875 195.82356962500003Q 359.71015625 202.63303837500004 363.519625 195.82356962500003L 363.519625 195.82356962500003L 363.519625 106.53920000000002L 363.519625 106.53920000000002zL 355.9006875 0L 363.519625 0L 363.519625 0L 363.519625 0L 355.9006875 0" cy="192.37730000000002" cx="435.0585" j="4" val="-87" barHeight="-192.37730000000002" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1341" d="M436.0585 0L436.0585 228.77476562500001Q439.86796875 235.58423437500002 443.6774375 228.77476562500001L443.6774375 228.77476562500001L443.6774375 0L443.6774375 0L436.0585 0C436.0585 0 436.0585 0 436.0585 0C436.0585 0 436.0585 0 436.0585 0C436.0585 0 436.0585 0 436.0585 0C436.0585 0 436.0585 0 436.0585 0C436.0585 0 436.0585 0 436.0585 0 " fill="rgba(240,39,105,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 436.0585 0L 436.0585 228.77476562500001Q 439.86796875 235.58423437500002 443.6774375 228.77476562500001L 443.6774375 228.77476562500001L 443.6774375 0L 443.6774375 0z" pathFrom="M 436.0585 106.53920000000002L 436.0585 215.00062562500003Q 439.86796875 221.81009437500003 443.6774375 215.00062562500003L 443.6774375 215.00062562500003L 443.6774375 106.53920000000002L 443.6774375 106.53920000000002zL 436.0585 0L 443.6774375 0L 443.6774375 0L 443.6774375 0L 436.0585 0" cy="232.17950000000002" cx="515.2163125" j="5" val="-105" barHeight="-232.17950000000002" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1342" d="M516.2163125 0L516.2163125 197.81749895833335Q520.0257812499999 204.62696770833335 523.83525 197.81749895833335L523.83525 197.81749895833335L523.83525 0L523.83525 0L516.2163125 0C516.2163125 0 516.2163125 0 516.2163125 0C516.2163125 0 516.2163125 0 516.2163125 0C516.2163125 0 516.2163125 0 516.2163125 0C516.2163125 0 516.2163125 0 516.2163125 0C516.2163125 0 516.2163125 0 516.2163125 0 " fill="rgba(240,39,105,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 516.2163125 0L 516.2163125 197.81749895833335Q 520.0257812499999 204.62696770833335 523.83525 197.81749895833335L 523.83525 197.81749895833335L 523.83525 0L 523.83525 0z" pathFrom="M 516.2163125 106.53920000000002L 516.2163125 200.08513762500002Q 520.0257812499999 206.89460637500002 523.83525 200.08513762500002L 523.83525 200.08513762500002L 523.83525 106.53920000000002L 523.83525 106.53920000000002zL 516.2163125 0L 523.83525 0L 523.83525 0L 523.83525 0L 516.2163125 0" cy="201.22223333333335" cx="595.3741249999999" j="6" val="-91" barHeight="-201.22223333333335" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1343" d="M596.3741249999999 0L596.3741249999999 248.675865625Q600.1835937499999 255.485334375 603.9930625 248.675865625L603.9930625 248.675865625L603.9930625 0L603.9930625 0L596.3741249999999 0C596.3741249999999 0 596.3741249999999 0 596.3741249999999 0C596.3741249999999 0 596.3741249999999 0 596.3741249999999 0C596.3741249999999 0 596.3741249999999 0 596.3741249999999 0C596.3741249999999 0 596.3741249999999 0 596.3741249999999 0C596.3741249999999 0 596.3741249999999 0 596.3741249999999 0 " fill="rgba(240,39,105,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 596.3741249999999 0L 596.3741249999999 248.675865625Q 600.1835937499999 255.485334375 603.9930625 248.675865625L 603.9930625 248.675865625L 603.9930625 0L 603.9930625 0z" pathFrom="M 596.3741249999999 106.53920000000002L 596.3741249999999 224.58915362500002Q 600.1835937499999 231.39862237500003 603.9930625 224.58915362500002L 603.9930625 224.58915362500002L 603.9930625 106.53920000000002L 603.9930625 106.53920000000002zL 596.3741249999999 0L 603.9930625 0L 603.9930625 0L 603.9930625 0L 596.3741249999999 0" cy="252.0806" cx="675.5319374999999" j="7" val="-114" barHeight="-252.0806" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1344" d="M676.5319374999999 0L676.5319374999999 204.45119895833335Q680.3414062499999 211.26066770833336 684.1508749999999 204.45119895833335L684.1508749999999 204.45119895833335L684.1508749999999 0L684.1508749999999 0L676.5319374999999 0C676.5319374999999 0 676.5319374999999 0 676.5319374999999 0C676.5319374999999 0 676.5319374999999 0 676.5319374999999 0C676.5319374999999 0 676.5319374999999 0 676.5319374999999 0C676.5319374999999 0 676.5319374999999 0 676.5319374999999 0C676.5319374999999 0 676.5319374999999 0 676.5319374999999 0 " fill="rgba(240,39,105,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 676.5319374999999 0L 676.5319374999999 204.45119895833335Q 680.3414062499999 211.26066770833336 684.1508749999999 204.45119895833335L 684.1508749999999 204.45119895833335L 684.1508749999999 0L 684.1508749999999 0z" pathFrom="M 676.5319374999999 106.53920000000002L 676.5319374999999 203.28131362500002Q 680.3414062499999 210.09078237500003 684.1508749999999 203.28131362500002L 684.1508749999999 203.28131362500002L 684.1508749999999 106.53920000000002L 684.1508749999999 106.53920000000002zL 676.5319374999999 0L 684.1508749999999 0L 684.1508749999999 0L 684.1508749999999 0L 676.5319374999999 0" cy="207.85593333333335" cx="755.6897499999999" j="8" val="-94" barHeight="-207.85593333333335" barWidth="9.618937500000001"></path>
                                                    <path id="SvgjsPath1345" d="M756.6897499999999 0L756.6897499999999 228.77476562500001Q760.4992187499998 235.58423437500002 764.3086874999999 228.77476562500001L764.3086874999999 228.77476562500001L764.3086874999999 0L764.3086874999999 0L756.6897499999999 0C756.6897499999999 0 756.6897499999999 0 756.6897499999999 0C756.6897499999999 0 756.6897499999999 0 756.6897499999999 0C756.6897499999999 0 756.6897499999999 0 756.6897499999999 0C756.6897499999999 0 756.6897499999999 0 756.6897499999999 0C756.6897499999999 0 756.6897499999999 0 756.6897499999999 0 " fill="rgba(240,39,105,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3uttcjxs)" pathTo="M 756.6897499999999 0L 756.6897499999999 228.77476562500001Q 760.4992187499998 235.58423437500002 764.3086874999999 228.77476562500001L 764.3086874999999 228.77476562500001L 764.3086874999999 0L 764.3086874999999 0z" pathFrom="M 756.6897499999999 106.53920000000002L 756.6897499999999 215.00062562500003Q 760.4992187499998 221.81009437500003 764.3086874999999 215.00062562500003L 764.3086874999999 215.00062562500003L 764.3086874999999 106.53920000000002L 764.3086874999999 106.53920000000002zL 756.6897499999999 0L 764.3086874999999 0L 764.3086874999999 0L 764.3086874999999 0L 756.6897499999999 0" cy="232.17950000000002" cx="835.8475624999999" j="9" val="-105" barHeight="-232.17950000000002" barWidth="9.618937500000001"></path>
                                                    <g id="SvgjsG1335" class="apexcharts-datalabels" data:realIndex="1"></g>
                                                </g>
                                                <g id="SvgjsG1323" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1416" x1="0" y1="0" x2="801.578125" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1417" x1="0" y1="0" x2="801.578125" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1418" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1419" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1420" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG1382" class="apexcharts-yaxis" rel="0" transform="translate(19.421875, 0)">
                                            <g id="SvgjsG1383" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1384" font-family="Helvetica, Arial, sans-serif" x="20" y="48.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1385">0</tspan>
                                                </text><text id="SvgjsText1386" font-family="Helvetica, Arial, sans-serif" x="20" y="114.73700000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1387">-30</tspan>
                                                </text><text id="SvgjsText1388" font-family="Helvetica, Arial, sans-serif" x="20" y="181.074" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1389">-60</tspan>
                                                </text><text id="SvgjsText1390" font-family="Helvetica, Arial, sans-serif" x="20" y="247.41100000000003" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1391">-90</tspan>
                                                </text><text id="SvgjsText1392" font-family="Helvetica, Arial, sans-serif" x="20" y="313.748" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#9a9797" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1393">-120</tspan>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1310" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(98, 54, 175);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(240, 39, 105);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 894px; height: 398px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 d-flex">
                    <div class="card radius-15 w-100">
                        <div class="card-body" style="position: relative;">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h5 class="mb-4">Devices of Visitors</h5>
                                </div>
                            </div>
                            <div id="chart5" style="min-height: 255.7px;">
                                <div id="apexchartsizt4ksjy" class="apexcharts-canvas apexchartsizt4ksjy apexcharts-theme-light" style="width: 402px; height: 255.7px;"><svg id="SvgjsSvg1240" width="402" height="255.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG1242" class="apexcharts-inner apexcharts-graphical" transform="translate(86.5, 0)">
                                            <defs id="SvgjsDefs1241">
                                                <clipPath id="gridRectMaskizt4ksjy">
                                                    <rect id="SvgjsRect1244" width="237" height="255" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskizt4ksjy">
                                                    <rect id="SvgjsRect1245" width="235" height="257" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG1247" class="apexcharts-pie">
                                                <g id="SvgjsG1248" transform="translate(0, 0) scale(1)">
                                                    <circle id="SvgjsCircle1249" r="93.93170731707318" cx="115.5" cy="126.5" fill="transparent"></circle>
                                                    <g id="SvgjsG1250" class="apexcharts-slices">
                                                        <g id="SvgjsG1251" class="apexcharts-series apexcharts-pie-series" seriesName="Mobile" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1252" d="M 115.50000000000001 9.08536585365853 A 117.41463414634147 117.41463414634147 0 0 1 232.91463414634148 126.5 L 209.43170731707318 126.5 A 93.93170731707318 93.93170731707318 0 0 0 115.5 32.568292682926824 L 115.50000000000001 9.08536585365853 z" fill="rgba(240,39,105,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="90" data:startAngle="0" data:strokeWidth="2" data:value="25" data:pathOrig="M 115.50000000000001 9.08536585365853 A 117.41463414634147 117.41463414634147 0 0 1 232.91463414634148 126.5 L 209.43170731707318 126.5 A 93.93170731707318 93.93170731707318 0 0 0 115.5 32.568292682926824 L 115.50000000000001 9.08536585365853 z" stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1253" class="apexcharts-series apexcharts-pie-series" seriesName="Desktop" rel="2" data:realIndex="1">
                                                            <path id="SvgjsPath1254" d="M 232.91463414634148 126.5 A 117.41463414634147 117.41463414634147 0 1 1 46.48540964546423 31.50956558729277 L 60.28832771637139 50.50765246983421 A 93.93170731707318 93.93170731707318 0 1 0 209.43170731707318 126.5 L 232.91463414634148 126.5 z" fill="rgba(103,58,183,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="234" data:startAngle="90" data:strokeWidth="2" data:value="65" data:pathOrig="M 232.91463414634148 126.5 A 117.41463414634147 117.41463414634147 0 1 1 46.48540964546423 31.50956558729277 L 60.28832771637139 50.50765246983421 A 93.93170731707318 93.93170731707318 0 1 0 209.43170731707318 126.5 L 232.91463414634148 126.5 z" stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1255" class="apexcharts-series apexcharts-pie-series" seriesName="Tablet" rel="3" data:realIndex="2">
                                                            <path id="SvgjsPath1256" d="M 46.48540964546423 31.50956558729277 A 117.41463414634147 117.41463414634147 0 0 1 115.47950728054523 9.08536764198567 L 115.4836058244362 32.568294113588536 A 93.93170731707318 93.93170731707318 0 0 0 60.28832771637139 50.50765246983421 L 46.48540964546423 31.50956558729277 z" fill="rgba(255,193,7,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="36" data:startAngle="324" data:strokeWidth="2" data:value="10" data:pathOrig="M 46.48540964546423 31.50956558729277 A 117.41463414634147 117.41463414634147 0 0 1 115.47950728054523 9.08536764198567 L 115.4836058244362 32.568294113588536 A 93.93170731707318 93.93170731707318 0 0 0 60.28832771637139 50.50765246983421 L 46.48540964546423 31.50956558729277 z" stroke="#ffffff"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1257" x1="0" y1="0" x2="231" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1258" x1="0" y1="0" x2="231" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1243" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                        <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(240, 39, 105);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(103, 58, 183);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 193, 7);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 435px; height: 337px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush mb-0">
                            <li class="list-group-item border-top d-flex justify-content-between align-items-center bg-transparent">Mobile<span class="badge bg-danger rounded-pill">25%</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Desktop<span class="badge bg-primary rounded-pill">65%</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Tablet<span class="badge bg-warning rounded-pill text-dark">10%</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12 col-lg-12 col-xl-6 d-flex">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="row row-cols-1 row-cols-md-3 g-3">
                                <div class="col">
                                    <div class="card radius-15 mb-0 shadow-none border">
                                        <div class="card-body text-center">
                                            <div class="widgets-icons mx-auto rounded-circle bg-info text-white"><i class="bx bx-time"></i>
                                            </div>
                                            <h4 class="mb-0 font-weight-bold mt-3">2m 28s</h4>
                                            <p class="mb-0">Avg. Time on Site</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card radius-15 mb-0 shadow-none border">
                                        <div class="card-body text-center">
                                            <div class="widgets-icons mx-auto bg-wall text-white rounded-circle"><i class="bx bx-bookmark-alt"></i>
                                            </div>
                                            <h4 class="mb-0 font-weight-bold mt-3">4.68</h4>
                                            <p class="mb-0">Pages/Session</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card radius-15 mb-0 shadow-none border">
                                        <div class="card-body text-center">
                                            <div class="widgets-icons mx-auto bg-rose rounded-circle text-white"><i class="bx bx-bulb"></i>
                                            </div>
                                            <h4 class="mb-0 font-weight-bold mt-3">78%</h4>
                                            <p class="mb-0">New Sessions</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card radius-15 mb-0 shadow-none border">
                                        <div class="card-body text-center">
                                            <div class="widgets-icons mx-auto rounded-circle bg-danger text-white"><i class="bx bx-line-chart"></i>
                                            </div>
                                            <h4 class="mb-0 font-weight-bold mt-3">23.4%</h4>
                                            <p class="mb-0">Bounce Rate</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card radius-15 mb-0 shadow-none border">
                                        <div class="card-body text-center">
                                            <div class="widgets-icons mx-auto bg-primary rounded-circle text-white"><i class="bx bx-group"></i>
                                            </div>
                                            <h4 class="mb-0 font-weight-bold mt-3">4,286</h4>
                                            <p class="mb-0">New Users</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card radius-15 mb-0 shadow-none border">
                                        <div class="card-body text-center">
                                            <div class="widgets-icons mx-auto bg-success text-white rounded-circle"><i class="bx bx-cloud-download"></i>
                                            </div>
                                            <h4 class="mb-0 font-weight-bold mt-3">78%</h4>
                                            <p class="mb-0">Downloads</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-6 d-flex">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="d-lg-flex align-items-center mb-4">
                                <div>
                                    <h5 class="mb-0">Social Media Traffic</h5>
                                </div>
                                <div class="ms-auto">
                                    <h3 class="mb-0"><span class="font-14">Total Visits:</span> 874</h3>
                                </div>
                            </div>
                            <hr>
                            <div class="dashboard-social-list ps ps--active-y">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="widgets-social bg-youtube rounded-circle text-white"><i class="bx bxl-youtube"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">YouTube</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">298</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="widgets-social bg-facebook rounded-circle text-white"><i class="bx bxl-facebook"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Facebook</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">324</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="widgets-social bg-linkedin rounded-circle text-white"><i class="bx bxl-linkedin"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Linkedin</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">127</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="widgets-social bg-twitter rounded-circle text-white"><i class="bx bxl-twitter"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Twitter</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">325</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="widgets-social bg-tumblr rounded-circle text-white"><i class="bx bxl-tumblr"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Tumblr</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">287</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="widgets-social bg-dribbble rounded-circle text-white"><i class="bx bxl-dribbble"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Dribbble</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">154</div>
                                    </li>
                                </ul>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; height: 240px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 168px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12 col-lg-12 col-xl-8">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h5 class="mb-0">Geographic</h5>
                            </div>
                            <hr>
                            <div id="geographic-map">
                                <div class="jvectormap-container" style="background-color: transparent;"><svg width="861.328" height="340">
                                        <defs></defs>
                                        <g transform="scale(0.7714888389637755) translate(108.22453708915083, 0)">
                                            <path d="M651.84,230.21l-0.6,-2.0l-1.36,-1.71l-2.31,-0.11l-0.41,0.48l0.2,0.94l-0.53,0.99l-0.72,-0.36l-0.68,0.35l-1.2,-0.36l-0.37,-2.0l-0.81,-1.86l0.39,-1.46l-0.22,-0.47l-1.14,-0.53l0.29,-0.5l1.48,-0.94l0.03,-0.65l-1.55,-1.22l0.55,-1.14l1.61,0.94l1.04,0.15l0.18,1.54l0.34,0.35l5.64,0.63l-0.84,1.64l-1.22,0.34l-0.77,1.51l0.07,0.47l1.37,1.37l0.67,-0.19l0.42,-1.39l1.21,3.84l-0.03,1.21l-0.33,-0.15l-0.4,0.28Z" data-code="BD" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M429.29,144.05l1.91,0.24l2.1,-0.63l2.63,1.99l-0.21,1.66l-0.69,0.4l-0.18,1.2l-1.66,-1.13l-1.39,0.15l-2.73,-2.7l-1.17,-0.18l-0.16,-0.52l1.54,-0.5Z" data-code="BE" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M421.42,247.64l-0.11,0.95l0.34,1.16l1.4,1.71l0.07,1.1l0.32,0.37l2.55,0.51l-0.04,1.28l-0.38,0.53l-1.07,0.21l-0.72,1.18l-0.63,0.21l-3.22,-0.25l-0.94,0.39l-5.4,-0.05l-0.39,0.38l0.16,2.73l-1.23,-0.43l-1.17,0.1l-0.89,0.57l-2.27,-1.72l-0.13,-1.11l0.61,-0.96l0.02,-0.93l1.87,-1.98l0.44,-1.81l0.43,-0.39l1.28,0.26l1.05,-0.52l0.47,-0.73l1.84,-1.09l0.55,-0.83l2.2,-1.0l1.15,-0.3l0.72,0.45l1.13,-0.01Z" data-code="BF" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M491.65,168.18l-0.86,0.88l-0.91,2.17l0.48,1.34l-1.6,-0.24l-2.55,0.95l-0.28,1.51l-1.8,0.22l-2.0,-1.0l-1.92,0.79l-1.42,-0.07l-0.15,-1.63l-1.05,-0.97l0.0,-0.8l1.2,-1.57l0.01,-0.56l-1.14,-1.23l-0.05,-0.94l0.88,0.97l0.88,-0.2l1.91,0.47l3.68,0.16l1.42,-0.81l2.72,-0.66l2.55,1.24Z" data-code="BG" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M463.49,163.65l2.1,0.5l1.72,-0.03l1.52,0.68l-0.36,0.78l0.08,0.45l1.04,1.02l-0.25,0.98l-1.81,1.15l-0.38,1.38l-1.67,-0.87l-0.89,-1.2l-2.11,-1.83l-1.63,-2.22l0.23,-0.57l0.48,0.38l0.55,-0.06l0.43,-0.51l0.94,-0.06Z" data-code="BA" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M707.48,273.58l0.68,-0.65l1.41,-0.91l-0.15,1.63l-0.81,-0.05l-0.61,0.58l-0.53,-0.6Z" data-code="BN" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M263.83,340.69l-3.09,-0.23l-0.38,0.23l-0.7,1.52l-1.31,-1.53l-3.28,-0.64l-2.37,2.4l-1.31,0.26l-0.88,-3.26l-1.3,-2.86l0.74,-2.37l-0.13,-0.43l-1.2,-1.01l-0.37,-1.89l-1.08,-1.55l1.45,-2.56l-0.96,-2.33l0.47,-1.06l-0.34,-0.73l0.91,-1.32l0.16,-3.84l0.5,-1.18l-1.81,-3.41l2.46,0.07l0.8,-0.85l3.4,-1.91l2.66,-0.35l-0.19,1.38l0.3,1.07l-0.05,1.97l2.72,2.27l2.88,0.49l0.89,0.86l1.79,0.58l0.98,0.7l1.71,0.05l1.17,0.61l0.6,2.7l-0.7,0.54l0.96,2.99l0.37,0.28l4.3,0.1l-0.25,1.2l0.27,1.02l1.43,0.9l0.5,1.35l-0.41,1.86l-0.65,1.08l0.12,1.35l-2.69,-1.65l-2.4,-0.03l-4.36,0.76l-1.49,2.5l-0.11,1.52l-0.75,2.37Z" data-code="BO" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M781.12,166.87l1.81,0.68l1.62,-0.97l0.39,2.42l-3.35,0.75l-2.23,2.88l-3.63,-1.9l-0.56,0.2l-1.26,3.05l-2.16,0.03l-0.29,-2.51l1.08,-2.03l2.45,-0.16l0.37,-0.33l1.25,-5.94l2.47,2.71l2.03,1.12ZM773.56,187.34l-0.91,2.22l0.37,1.52l-1.14,1.75l-3.02,1.26l-4.58,0.27l-3.34,3.01l-1.25,-0.8l-0.09,-1.9l-0.46,-0.38l-4.35,0.62l-3.0,1.32l-2.85,0.05l-0.37,0.27l0.13,0.44l2.32,1.89l-1.54,4.34l-1.26,0.9l-0.79,-0.7l0.56,-2.27l-0.21,-0.45l-1.47,-0.75l-0.74,-1.4l2.12,-0.84l1.26,-1.7l2.45,-1.42l1.83,-1.91l4.78,-0.81l2.6,0.57l0.44,-0.21l2.39,-4.66l1.29,1.06l0.5,0.01l5.1,-4.02l1.69,-3.73l-0.38,-3.4l0.9,-1.61l2.14,-0.44l1.23,3.72l-0.07,2.18l-2.23,2.84l-0.04,3.16ZM757.78,196.26l0.19,0.56l-1.01,1.21l-1.16,-0.68l-1.28,0.65l-0.69,1.45l-1.02,-0.5l0.01,-0.93l1.14,-1.38l1.57,0.14l0.85,-0.98l1.4,0.46Z" data-code="JP" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M495.45,295.49l-1.08,-2.99l1.14,-0.11l0.64,-1.19l0.76,0.09l0.65,1.83l-2.1,2.36Z" data-code="BI" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M429.57,255.75l-0.05,0.8l0.5,1.34l-0.42,0.86l0.17,0.79l-1.81,2.12l-0.57,1.76l-0.08,5.42l-1.41,0.2l-0.48,-1.36l0.11,-5.71l-0.52,-0.7l-0.2,-1.35l-1.48,-1.48l0.21,-0.9l0.89,-0.43l0.42,-0.92l1.27,-0.36l1.22,-1.34l0.61,-0.0l1.62,1.24Z" data-code="BJ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M650.32,213.86l0.84,0.71l-0.12,1.1l-3.76,-0.11l-1.57,0.4l-1.93,-0.87l1.48,-1.96l1.13,-0.57l1.63,0.57l1.33,0.08l0.99,0.65Z" data-code="BT" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M228.38,239.28l-0.8,0.4l-2.26,-1.06l0.84,-0.23l2.14,0.3l1.17,0.56l-1.08,0.03Z" data-code="JM" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M483.92,330.07l2.27,4.01l2.83,2.86l0.96,0.31l0.78,2.43l2.13,0.61l1.02,0.76l-3.0,1.64l-2.32,2.02l-1.54,2.69l-1.52,0.45l-0.64,1.94l-1.34,0.52l-1.85,-0.12l-1.21,-0.74l-1.35,-0.3l-1.22,0.62l-0.75,1.37l-2.31,1.9l-1.4,0.21l-0.35,-0.59l0.16,-1.75l-1.48,-2.54l-0.62,-0.43l-0.0,-7.1l2.08,-0.08l0.39,-0.4l0.07,-8.9l5.19,-0.93l0.8,0.89l0.51,0.07l1.5,-0.95l2.21,-0.49Z" data-code="BW" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M259.98,275.05l3.24,0.7l0.65,-0.53l4.55,-1.32l1.08,-1.06l-0.02,-0.63l0.55,-0.05l0.28,0.28l-0.26,0.87l0.22,0.48l0.73,0.32l0.4,0.81l-0.62,0.86l-0.4,2.13l0.82,2.56l1.69,1.43l1.43,0.2l3.17,-1.68l3.18,0.3l0.65,-0.75l-0.27,-0.92l1.9,-0.09l2.39,0.99l1.06,-0.61l0.84,0.78l1.2,-0.18l1.18,-1.06l0.84,-1.94l1.36,-2.11l0.37,-0.05l1.89,5.45l1.33,0.59l0.05,1.28l-1.77,1.94l0.02,0.56l1.02,0.87l4.07,0.36l0.08,2.16l0.66,0.29l1.74,-1.5l6.97,2.32l1.02,1.22l-0.35,1.18l0.49,0.5l2.81,-0.74l4.77,1.3l3.75,-0.08l3.57,2.0l3.29,2.86l1.93,0.72l2.12,0.12l0.71,0.62l1.21,4.51l-0.95,3.98l-4.72,5.06l-1.64,2.92l-1.72,2.05l-0.8,0.3l-0.72,2.03l0.18,4.75l-0.94,5.53l-0.81,1.13l-0.43,3.36l-2.55,3.5l-0.4,2.51l-1.86,1.04l-0.67,1.53l-2.54,0.01l-3.94,1.01l-1.83,1.2l-2.87,0.82l-3.03,2.19l-2.2,2.83l-0.36,2.0l0.4,1.58l-0.44,2.6l-0.51,1.2l-1.77,1.54l-2.75,4.78l-3.83,3.42l-1.24,2.74l-1.18,1.15l-0.36,-0.83l0.95,-1.14l0.01,-0.5l-1.52,-1.97l-4.56,-3.32l-1.03,-0.0l-2.38,-2.02l-0.81,-0.0l5.34,-5.45l3.77,-2.58l0.22,-2.46l-1.35,-1.81l-0.91,0.07l0.58,-2.33l0.01,-1.54l-1.11,-0.83l-1.75,0.3l-0.44,-3.11l-0.52,-0.95l-1.88,-0.88l-1.24,0.47l-2.17,-0.41l0.15,-3.21l-0.62,-1.34l0.66,-0.73l-0.22,-1.34l0.66,-1.13l0.44,-2.04l-0.61,-1.83l-1.4,-0.86l-0.2,-0.75l0.34,-1.39l-0.38,-0.5l-4.52,-0.1l-0.72,-2.22l0.59,-0.42l-0.03,-1.1l-0.5,-0.87l-0.32,-1.7l-1.45,-0.76l-1.63,-0.02l-1.05,-0.72l-1.6,-0.48l-1.13,-0.99l-2.69,-0.4l-2.47,-2.06l0.13,-4.35l-0.45,-0.45l-3.46,0.5l-3.44,1.94l-0.6,0.74l-2.9,-0.17l-1.47,0.42l-0.72,-0.18l0.15,-3.52l-0.63,-0.34l-1.94,1.41l-1.87,-0.06l-0.83,-1.18l-1.37,-0.26l0.21,-1.01l-1.35,-1.49l-0.88,-1.91l0.56,-0.6l-0.0,-0.81l1.29,-0.62l0.22,-0.43l-0.22,-1.19l0.61,-0.91l0.15,-0.99l2.65,-1.58l1.99,-0.47l0.42,-0.36l2.06,0.11l0.42,-0.33l1.19,-8.0l-0.41,-1.56l-1.1,-1.0l0.01,-1.33l1.91,-0.42l0.08,-0.96l-0.33,-0.43l-1.14,-0.2l-0.02,-0.83l4.47,0.05l0.82,-0.67l0.82,1.81l0.8,0.07l1.15,1.1l2.26,-0.05l0.71,-0.83l2.78,-0.96l0.48,-1.13l1.6,-0.64l0.24,-0.47l-0.48,-0.82l-1.83,-0.19l-0.36,-3.22Z" data-code="BR" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M226.4,223.87l-0.48,-1.15l-0.84,-0.75l0.36,-1.11l0.95,1.95l0.01,1.06ZM225.56,216.43l-1.87,0.29l-0.04,-0.22l0.74,-0.14l1.17,0.06Z" data-code="BS" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M493.84,128.32l0.29,0.7l0.49,0.23l1.19,-0.38l2.09,0.72l0.19,1.26l-0.45,1.24l1.57,2.26l0.89,0.59l0.17,0.81l1.58,0.56l0.4,0.5l-0.53,0.41l-1.87,-0.11l-0.73,0.38l-0.13,0.52l1.04,2.74l-1.91,0.26l-0.89,0.99l-0.11,1.18l-2.73,-0.04l-0.53,-0.62l-0.52,-0.08l-0.75,0.46l-0.91,-0.42l-1.92,-0.07l-2.75,-0.79l-2.6,-0.28l-2.0,0.07l-1.5,0.92l-0.67,0.07l-0.08,-1.22l-0.59,-1.19l1.36,-0.88l0.01,-1.35l-0.7,-1.41l-0.07,-1.0l2.16,-0.02l2.72,-1.3l0.75,-2.04l1.91,-1.04l0.2,-0.41l-0.19,-1.25l3.8,-1.78l2.3,0.77Z" data-code="BY" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M198.03,244.38l0.1,-4.49l0.69,-0.06l0.74,-1.3l0.34,0.28l-0.4,1.3l0.17,0.58l-0.34,2.25l-1.3,1.42Z" data-code="BZ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M491.55,115.25l2.55,-1.85l-0.01,-0.65l-2.2,-1.5l7.32,-6.76l1.03,-2.11l-0.13,-0.49l-3.46,-2.52l0.86,-2.7l-2.11,-2.81l1.56,-3.67l-2.77,-4.52l2.15,-2.99l-0.08,-0.55l-3.65,-2.73l0.3,-2.54l1.81,-0.37l4.26,-1.77l2.42,-1.45l4.06,2.61l6.79,1.04l9.34,4.85l1.78,1.88l0.14,2.46l-2.55,2.02l-3.9,1.06l-11.07,-3.14l-2.06,0.53l-0.13,0.7l3.94,2.94l0.31,5.86l0.26,0.36l5.14,2.24l0.58,-0.29l0.32,-1.94l-1.35,-1.78l1.13,-1.09l6.13,2.42l2.11,-0.98l0.18,-0.56l-1.51,-2.67l5.41,-3.76l2.07,0.22l2.26,1.41l0.57,-0.16l1.46,-2.87l-0.05,-0.44l-1.92,-2.32l1.12,-2.32l-1.32,-2.27l5.87,1.16l1.04,1.75l-2.59,0.43l-0.33,0.4l0.02,2.36l2.46,1.83l3.87,-0.91l0.86,-2.8l13.69,-5.65l0.99,0.11l-1.92,2.06l0.23,0.67l3.11,0.45l2.0,-1.48l4.56,-0.12l3.64,-1.73l2.65,2.44l0.56,-0.01l2.85,-2.88l-0.01,-0.57l-2.35,-2.29l0.9,-1.01l7.14,1.3l3.41,1.36l9.05,4.97l0.51,-0.11l1.67,-2.27l-0.05,-0.53l-2.43,-2.21l-0.06,-0.78l-0.34,-0.36l-2.52,-0.36l0.64,-1.93l-1.32,-3.46l-0.06,-1.21l4.48,-4.06l1.69,-4.29l1.6,-0.81l6.23,1.18l0.44,2.21l-2.29,3.64l0.06,0.5l1.47,1.39l0.76,3.0l-0.56,6.03l2.69,2.82l-0.96,2.57l-4.86,5.95l0.23,0.64l2.86,0.61l0.42,-0.17l0.93,-1.4l2.64,-1.03l0.87,-2.24l2.09,-1.96l0.07,-0.5l-1.36,-2.28l1.09,-2.69l-0.32,-0.55l-2.47,-0.33l-0.5,-2.06l1.94,-4.38l-0.06,-0.42l-2.96,-3.4l4.12,-2.88l0.16,-0.4l-0.51,-2.93l0.54,-0.05l1.13,2.25l-0.96,4.35l0.27,0.47l2.68,0.84l0.5,-0.51l-1.02,-2.99l3.79,-1.66l5.01,-0.24l4.53,2.61l0.48,-0.06l0.07,-0.48l-2.18,-3.82l-0.23,-4.67l3.98,-0.9l5.97,0.21l5.49,-0.64l0.27,-0.65l-1.83,-2.31l2.56,-2.9l2.87,-0.17l4.8,-2.47l6.54,-0.67l1.03,-1.42l6.25,-0.45l2.32,1.11l5.53,-2.7l4.5,0.08l0.39,-0.28l0.66,-2.15l2.26,-2.12l5.69,-2.11l3.21,1.29l-2.46,0.94l-0.25,0.42l0.34,0.35l5.41,0.77l0.61,2.33l0.58,0.25l2.2,-1.22l7.13,0.07l5.51,2.47l1.79,1.72l-0.53,2.24l-9.16,4.15l-1.97,1.52l0.16,0.71l6.77,1.91l2.16,-0.78l1.13,2.74l0.67,0.11l1.01,-1.15l3.81,-0.73l7.7,0.77l0.54,1.99l0.36,0.29l10.47,0.71l0.43,-0.38l0.13,-3.23l4.87,0.78l3.95,-0.02l3.83,2.4l1.03,2.71l-1.35,1.79l0.02,0.5l3.15,3.64l4.07,1.96l0.53,-0.18l2.23,-4.47l3.95,1.93l4.16,-1.21l4.73,1.39l2.05,-1.26l3.94,0.62l0.43,-0.55l-1.68,-4.02l2.89,-1.8l22.31,3.03l2.16,2.75l6.55,3.51l10.29,-0.81l4.82,0.73l1.85,1.66l-0.29,3.08l0.25,0.41l3.08,1.26l3.56,-0.88l4.35,-0.11l4.8,0.87l4.57,-0.47l4.23,3.79l0.43,0.07l3.1,-1.4l0.16,-0.6l-1.88,-2.62l0.85,-1.52l7.71,1.21l5.22,-0.26l7.09,2.09l9.59,5.22l6.35,4.11l-0.2,2.38l1.88,1.41l0.6,-0.42l-0.48,-2.53l6.15,0.57l4.4,3.51l-1.97,1.43l-4.0,0.41l-0.36,0.39l-0.06,3.79l-0.74,0.62l-2.07,-0.11l-1.91,-1.39l-3.14,-1.11l-0.78,-1.85l-2.72,-0.68l-2.63,0.49l-1.04,-1.1l0.46,-1.31l-0.5,-0.51l-3.0,0.98l-0.22,0.58l0.99,1.7l-1.21,1.48l-3.04,1.68l-3.12,-0.28l-0.4,0.23l0.09,0.46l2.2,2.09l1.46,3.2l1.15,1.1l0.24,1.33l-0.42,0.67l-4.63,-0.77l-6.96,2.9l-2.19,0.44l-7.6,5.06l-0.84,1.45l-3.61,-2.37l-6.24,2.82l-0.94,-1.15l-0.53,-0.08l-2.28,1.52l-3.2,-0.49l-0.44,0.27l-0.78,2.37l-3.05,3.78l0.09,1.47l0.29,0.36l2.54,0.72l-0.29,4.53l-1.97,0.11l-0.35,0.26l-1.07,2.94l0.8,1.45l-3.91,1.58l-1.05,3.95l-3.48,0.77l-0.3,0.3l-0.72,3.29l-3.09,2.65l-0.7,-1.74l-2.44,-12.44l1.16,-4.71l2.04,-2.06l0.22,-1.64l3.8,-0.86l4.46,-4.61l4.28,-3.81l4.48,-3.01l2.17,-5.63l-0.42,-0.54l-3.04,0.33l-1.77,3.31l-5.86,3.86l-1.86,-4.25l-0.45,-0.23l-6.46,1.3l-6.47,6.44l-0.01,0.55l1.58,1.74l-8.24,1.17l0.15,-2.2l-0.34,-0.42l-3.89,-0.56l-3.25,1.81l-7.62,-0.62l-8.45,1.19l-17.71,15.41l0.22,0.7l3.74,0.41l1.36,2.17l2.43,0.76l1.88,-1.68l2.4,0.2l3.4,3.54l0.08,2.6l-1.95,3.42l-0.21,3.9l-1.1,5.06l-3.71,4.54l-0.87,2.21l-8.29,8.89l-3.19,1.7l-1.32,0.03l-1.45,-1.36l-0.49,-0.04l-2.27,1.5l0.41,-3.65l-0.59,-2.47l1.75,-0.89l2.91,0.53l0.42,-0.2l1.68,-3.03l0.87,-3.46l0.97,-1.18l1.32,-2.88l-0.45,-0.56l-4.14,0.95l-2.19,1.25l-3.41,-0.0l-1.06,-2.93l-2.97,-2.3l-4.28,-1.06l-1.75,-5.07l-2.66,-5.01l-2.29,-1.29l-3.75,-1.01l-3.44,0.08l-3.18,0.62l-2.24,1.77l0.05,0.66l1.18,0.69l0.02,1.43l-1.33,1.05l-2.26,3.51l-0.04,1.43l-3.16,1.84l-2.82,-1.16l-3.01,0.23l-1.35,-1.07l-1.5,-0.35l-3.9,2.31l-3.22,0.52l-2.27,0.79l-3.05,-0.51l-2.21,0.03l-1.48,-1.6l-2.6,-1.63l-2.63,-0.43l-5.46,1.01l-3.23,-1.25l-0.72,-2.57l-5.2,-1.24l-2.75,-1.36l-0.5,0.12l-2.59,3.45l0.84,2.1l-2.06,1.93l-3.41,-0.77l-2.42,-0.12l-1.83,-1.54l-2.53,-0.05l-2.42,-0.98l-3.86,1.57l-4.72,2.78l-3.3,0.75l-1.55,-1.92l-3.0,0.41l-1.11,-1.33l-1.62,-0.59l-1.31,-1.94l-1.38,-0.6l-3.7,0.79l-3.31,-1.83l-0.51,0.11l-0.99,1.29l-5.29,-8.05l-2.96,-2.48l0.65,-0.77l0.01,-0.51l-0.5,-0.11l-6.2,3.21l-1.84,0.15l0.15,-1.39l-0.26,-0.42l-3.22,-1.17l-2.46,0.7l-0.69,-3.16l-0.32,-0.31l-4.5,-0.75l-2.47,1.47l-6.19,1.27l-1.29,0.86l-9.51,1.3l-1.15,1.17l-0.03,0.53l1.47,1.9l-1.89,0.69l-0.22,0.56l0.31,0.6l-2.11,1.44l0.03,0.68l3.75,2.12l-0.39,0.98l-3.23,-0.13l-0.86,0.86l-3.09,-1.59l-3.97,0.07l-2.66,1.35l-8.32,-3.56l-4.07,0.06l-5.39,3.68l-0.39,2.0l-2.03,-1.5l-0.59,0.13l-2.0,3.59l0.57,0.93l-1.28,2.16l0.06,0.48l2.13,2.17l1.95,0.04l1.37,1.82l-0.23,1.46l0.25,0.43l0.83,0.33l-0.8,1.31l-2.49,0.62l-2.49,3.2l0.0,0.49l2.17,2.78l-0.15,2.18l2.5,3.24l-1.58,1.59l-0.7,-0.13l-1.63,-1.72l-2.29,-0.84l-0.94,-1.31l-2.34,-0.63l-1.48,0.4l-0.43,-0.47l-3.51,-1.48l-5.76,-1.01l-0.45,0.19l-2.89,-2.34l-2.9,-1.2l-1.53,-1.29l1.29,-0.43l2.08,-2.61l-0.05,-0.55l-0.89,-0.79l3.05,-1.06l0.27,-0.42l-0.07,-0.69l-0.49,-0.35l-1.73,0.39l0.04,-0.68l1.04,-0.72l2.66,-0.48l0.4,-1.32l-0.5,-1.6l0.92,-1.54l0.03,-1.17l-0.29,-0.37l-3.69,-1.06l-1.41,0.02l-1.42,-1.41l-2.19,0.38l-2.77,-1.01l-0.03,-0.59l-0.89,-1.43l-2.0,-0.32l-0.11,-0.54l0.49,-0.53l0.01,-0.53l-1.6,-1.9l-3.58,0.02l-0.88,0.73l-0.46,-0.07l-1.0,-2.79l2.22,-0.02l0.97,-0.74l0.07,-0.57l-0.9,-1.04l-1.35,-0.48l-0.11,-0.7l-0.95,-0.58l-1.38,-1.99l0.46,-0.98l-0.51,-1.96l-2.45,-0.84l-1.21,0.3l-0.46,-0.76l-2.46,-0.83l-0.72,-1.87l-0.21,-1.69l-0.99,-0.85l0.85,-1.17l-0.7,-3.21l1.66,-1.97l-0.16,-0.79ZM749.2,170.72l-0.6,0.4l-0.13,0.16l-0.01,-0.51l0.74,-0.05ZM874.85,67.94l-5.63,0.48l-0.26,-0.84l3.15,-1.89l1.94,0.01l3.19,1.16l-2.39,1.09ZM797.39,48.49l-2.0,1.36l-3.8,-0.42l-4.25,-1.8l0.35,-0.97l9.69,1.83ZM783.67,46.12l-1.63,3.09l-8.98,-0.13l-4.09,1.14l-4.54,-2.97l1.16,-3.01l3.05,-0.89l6.5,0.22l8.54,2.56ZM778.2,134.98l-0.56,-0.9l0.27,-0.12l0.29,1.01ZM778.34,135.48l0.94,3.53l-0.05,3.38l1.05,3.39l2.18,5.0l-2.89,-0.83l-0.49,0.26l-1.54,4.65l2.42,3.5l-0.04,1.13l-1.24,-1.24l-0.61,0.06l-1.09,1.61l-0.28,-1.61l0.27,-3.1l-0.28,-3.4l0.58,-2.47l0.11,-4.39l-1.46,-3.36l0.21,-4.32l2.15,-1.46l0.07,-0.34ZM771.95,56.61l1.76,-1.42l2.89,-0.42l3.28,1.71l0.14,0.6l-3.27,0.03l-4.81,-0.5ZM683.76,31.09l-13.01,1.93l4.03,-6.35l1.82,-0.56l1.73,0.34l5.99,2.98l-0.56,1.66ZM670.85,27.93l-5.08,0.64l-6.86,-1.57l-3.99,-2.05l-2.1,-4.16l-2.6,-0.87l5.72,-3.5l5.2,-1.28l4.69,2.85l5.59,5.4l-0.56,4.53ZM564.15,68.94l-0.64,0.17l-7.85,-0.57l-0.86,-2.04l-4.28,-1.17l-0.28,-1.94l2.27,-0.89l0.25,-0.39l-0.08,-2.38l4.81,-3.97l-0.15,-0.7l-1.47,-0.38l5.3,-3.81l0.15,-0.44l-0.58,-1.94l5.28,-2.51l8.21,-3.27l8.28,-0.96l4.35,-1.94l4.6,-0.64l1.36,1.61l-1.34,1.28l-16.43,4.94l-7.97,4.88l-7.74,9.63l0.66,4.14l4.16,3.27ZM548.81,18.48l-5.5,1.18l-0.58,1.02l-2.59,0.84l-2.13,-1.07l1.12,-1.42l-0.3,-0.65l-2.33,-0.07l1.68,-0.36l3.47,-0.06l0.42,1.29l0.66,0.16l1.38,-1.34l2.15,-0.88l2.94,1.01l-0.39,0.36ZM477.37,133.15l-4.08,0.05l-2.56,-0.32l0.33,-0.87l3.17,-1.03l3.24,0.96l-0.09,1.23Z" data-code="RU" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M497.0,288.25l0.71,1.01l-0.11,1.09l-1.63,0.03l-1.04,1.39l-0.83,-0.11l0.51,-1.2l0.08,-1.34l0.42,-0.41l0.7,0.14l1.19,-0.61Z" data-code="RW" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M469.4,163.99l0.42,-0.5l-0.01,-0.52l-1.15,-1.63l1.43,-0.62l1.33,0.12l1.17,1.06l0.46,1.13l1.34,0.64l0.35,1.35l1.46,0.9l0.76,-0.29l0.2,0.69l-0.48,0.78l0.22,1.12l1.05,1.22l-0.77,0.8l-0.37,1.52l-1.21,0.08l0.24,-0.64l-0.39,-0.54l-2.08,-1.64l-0.9,0.05l-0.48,0.94l-2.12,-1.37l0.53,-1.6l-1.11,-1.37l0.51,-1.1l-0.41,-0.57Z" data-code="RS" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M486.93,129.3l0.17,1.12l-1.81,0.98l-0.72,2.02l-2.47,1.18l-2.1,-0.02l-0.73,-1.05l-1.06,-0.3l-0.09,-1.87l-3.56,-1.13l-0.43,-2.36l2.48,-0.94l4.12,0.22l2.25,-0.31l0.52,0.69l1.24,0.21l2.19,1.56Z" data-code="LT" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M436.08,149.45l-0.48,-0.07l0.3,-1.28l0.27,0.4l-0.09,0.96Z" data-code="LU" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M399.36,265.97l0.18,1.54l-0.48,0.99l0.08,0.47l2.47,1.8l-0.33,2.8l-2.65,-1.13l-5.78,-4.61l0.58,-1.32l2.1,-2.33l0.86,-0.22l0.77,1.14l-0.14,0.85l0.59,0.87l1.0,0.14l0.76,-0.99Z" data-code="LR" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M487.53,154.23l0.6,0.24l2.87,3.98l-0.17,2.69l0.45,1.42l1.32,0.81l1.35,-0.42l0.76,0.36l0.02,0.31l-0.83,0.45l-0.59,-0.22l-0.54,0.3l-0.62,3.3l-1.0,-0.22l-2.07,-1.13l-2.95,0.71l-1.25,0.76l-3.51,-0.15l-1.89,-0.47l-0.87,0.16l-0.82,-1.3l0.29,-0.26l-0.06,-0.64l-1.09,-0.34l-0.56,0.5l-1.05,-0.64l-0.39,-1.39l-1.36,-0.65l-0.35,-1.0l-0.83,-0.75l1.54,-0.54l2.66,-4.21l2.4,-1.24l2.96,0.34l1.48,0.73l0.79,-0.45l1.78,-0.3l0.75,-0.74l0.79,0.0Z" data-code="RO" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M386.23,253.6l-0.29,0.84l0.15,0.6l-2.21,0.59l-0.86,0.96l-1.04,-0.83l-1.09,-0.23l-0.54,-1.06l-0.66,-0.49l2.41,-0.48l4.13,0.1Z" data-code="GW" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M195.08,249.77l-2.48,-0.37l-1.03,-0.45l-1.14,-0.89l0.3,-0.99l-0.24,-0.68l0.96,-1.66l2.98,-0.01l0.4,-0.37l-0.19,-1.28l-1.67,-1.4l0.51,-0.4l0.0,-1.05l3.85,0.02l-0.21,4.53l0.4,0.43l1.46,0.38l-1.48,0.98l-0.35,0.7l0.12,0.57l-2.2,1.96Z" data-code="GT" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M487.07,174.59l-0.59,1.43l-0.37,0.21l-2.84,-0.35l-3.03,0.77l-0.18,0.68l1.28,1.23l-0.61,0.23l-1.14,0.0l-1.2,-1.39l-0.63,0.03l-0.53,1.01l0.56,1.76l1.03,1.19l-0.56,0.38l-0.05,0.62l2.52,2.12l0.02,0.87l-1.78,-0.59l-0.48,0.56l0.5,1.0l-1.07,0.2l-0.3,0.53l0.75,2.01l-0.98,0.02l-1.84,-1.12l-1.37,-4.2l-2.21,-2.95l-0.11,-0.56l1.04,-1.28l0.2,-0.95l0.85,-0.66l0.03,-0.46l1.32,-0.21l1.01,-0.64l1.22,0.05l0.65,-0.56l2.26,-0.0l1.82,-0.75l1.85,1.0l2.28,-0.28l0.35,-0.39l0.01,-0.77l0.34,0.22ZM480.49,192.16l0.58,0.4l-0.68,-0.12l0.11,-0.28ZM482.52,192.82l2.51,0.06l0.24,0.32l-1.99,0.13l-0.77,-0.51Z" data-code="GR" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M448.79,279.62l0.02,2.22l-4.09,0.0l0.69,-2.27l3.38,0.05Z" data-code="GQ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M277.42,270.07l-0.32,1.83l-1.32,0.57l-0.23,0.46l-0.28,2.0l1.11,1.82l0.83,0.19l0.32,1.25l1.13,1.62l-1.21,-0.19l-1.08,0.71l-1.77,0.5l-0.44,0.46l-0.86,-0.09l-1.32,-1.01l-0.77,-2.27l0.36,-1.9l0.68,-1.23l-0.57,-1.17l-0.74,-0.43l0.12,-1.16l-0.9,-0.69l-1.1,0.09l-1.31,-1.48l0.53,-0.72l-0.04,-0.84l1.99,-0.86l0.05,-0.59l-0.71,-0.78l0.14,-0.57l1.66,-1.24l1.36,0.77l1.41,1.49l0.06,1.15l0.37,0.38l0.8,0.05l2.06,1.86Z" data-code="GY" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M521.71,168.93l5.29,0.89l4.07,2.01l1.41,-0.44l2.07,0.56l0.68,1.1l1.07,0.55l-0.12,0.59l0.98,1.29l-1.01,-0.13l-1.81,-0.83l-0.94,0.47l-3.23,0.43l-2.29,-1.39l-2.33,0.05l0.21,-0.97l-0.76,-2.26l-1.45,-1.12l-1.43,-0.39l-0.41,-0.42Z" data-code="GE" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M412.61,118.72l-2.19,3.22l-0.0,0.45l5.13,-0.3l-0.53,2.37l-2.2,3.12l0.29,0.63l2.37,0.21l2.33,4.3l1.76,0.69l2.2,5.12l2.94,0.77l-0.23,1.62l-1.15,0.88l-0.1,0.52l0.82,1.42l-1.86,1.43l-3.3,-0.02l-4.12,0.87l-1.04,-0.58l-0.47,0.06l-1.51,1.41l-2.12,-0.34l-1.86,1.18l-0.6,-0.29l3.19,-3.0l2.16,-0.69l0.28,-0.41l-0.34,-0.36l-3.73,-0.53l-0.4,-0.76l2.2,-0.87l0.17,-0.61l-1.26,-1.67l0.36,-1.7l3.38,0.28l0.43,-0.33l0.37,-1.99l-1.79,-2.49l-3.11,-0.72l-0.38,-0.59l0.79,-1.35l-0.04,-0.46l-0.82,-0.97l-0.61,0.01l-0.68,0.84l-0.1,-2.34l-1.23,-1.88l0.85,-3.47l1.77,-2.68l1.85,0.26l2.17,-0.22ZM406.26,132.86l-1.01,1.77l-1.57,-0.59l-1.16,0.01l0.37,-1.54l-0.39,-1.39l1.45,-0.1l2.3,1.84Z" data-code="GB" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M453.24,279.52l-0.08,0.98l0.7,1.29l2.36,0.24l-0.98,2.63l1.18,1.79l0.25,1.78l-0.29,1.52l-0.6,0.93l-1.84,-0.09l-1.23,-1.11l-0.66,0.23l-0.15,0.84l-1.42,0.26l-1.02,0.7l-0.11,0.52l0.77,1.35l-1.34,0.97l-3.94,-4.3l-1.44,-2.45l0.06,-0.6l0.54,-0.81l1.05,-3.46l4.17,-0.07l0.4,-0.4l-0.02,-2.66l2.39,0.21l1.25,-0.27Z" data-code="GA" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M391.8,254.11l0.47,0.8l1.11,-0.32l0.98,0.7l1.07,0.2l2.26,-1.22l0.64,0.44l1.13,1.56l-0.48,1.4l0.8,0.3l-0.08,0.48l0.46,0.68l-0.35,1.36l1.05,2.61l-1.0,0.69l0.03,1.41l-0.72,-0.06l-1.08,1.0l-0.24,-0.27l0.07,-1.11l-1.05,-1.54l-1.79,0.21l-0.35,-2.01l-1.6,-2.18l-2.0,-0.0l-1.31,0.54l-1.95,2.18l-1.86,-2.19l-1.2,-0.78l-0.3,-1.11l-0.8,-0.85l0.65,-0.72l0.81,-0.03l1.64,-0.8l0.23,-1.87l2.67,0.64l0.89,-0.3l1.21,0.15Z" data-code="GN" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M379.31,251.39l0.1,-0.35l2.43,-0.07l0.74,-0.61l0.51,-0.03l0.77,0.49l-1.03,-0.3l-1.87,0.9l-1.65,-0.04ZM384.03,250.91l0.91,0.05l0.75,-0.24l-0.59,0.31l-1.08,-0.13Z" data-code="GM" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M353.02,1.2l14.69,4.67l-3.68,1.89l-22.97,0.86l-0.36,0.27l0.12,0.43l1.55,1.18l8.79,-0.66l7.48,2.07l4.86,-1.77l1.66,1.73l-2.53,3.19l-0.01,0.48l0.46,0.15l6.35,-2.2l12.06,-2.31l7.24,1.13l1.09,1.99l-9.79,4.01l-1.44,1.32l-7.87,0.98l-0.35,0.41l0.38,0.38l5.07,0.24l-2.53,3.58l-2.07,3.81l0.08,6.05l2.57,3.11l-3.22,0.2l-4.12,1.66l-0.05,0.72l4.45,2.65l0.51,3.75l-2.3,0.4l-0.25,0.64l2.79,3.69l-4.82,0.31l-0.36,0.29l0.16,0.44l2.62,1.8l-0.59,1.22l-3.3,0.7l-3.45,0.01l-0.29,0.68l3.03,3.12l0.02,1.34l-4.4,-1.73l-1.72,1.35l0.15,0.66l3.31,1.15l3.13,2.71l0.81,3.16l-3.85,0.75l-4.89,-4.26l-0.47,-0.03l-0.17,0.44l0.79,2.86l-2.71,2.21l-0.13,0.44l0.37,0.27l8.73,0.34l-12.32,6.64l-7.24,1.48l-2.94,0.08l-2.69,1.75l-3.43,4.41l-5.24,2.84l-1.73,0.18l-7.12,2.1l-2.15,2.52l-0.13,2.99l-1.19,2.45l-4.01,3.09l-0.14,0.44l0.97,2.9l-2.28,6.48l-3.1,0.2l-3.83,-3.07l-4.86,-0.02l-2.25,-1.93l-1.7,-3.79l-4.3,-4.84l-1.21,-2.49l-0.44,-3.8l-3.32,-3.63l0.84,-2.86l-1.56,-1.7l2.28,-4.6l3.83,-1.74l1.03,-1.96l0.52,-3.47l-0.59,-0.41l-4.17,2.21l-2.07,0.58l-2.72,-1.28l-0.15,-2.71l0.85,-2.09l2.01,-0.06l5.06,1.2l0.46,-0.23l-0.14,-0.49l-6.54,-4.47l-2.67,0.55l-1.58,-0.86l2.56,-4.01l-0.03,-0.48l-1.5,-1.74l-4.98,-8.5l-3.13,-1.96l0.03,-1.88l-0.24,-0.37l-6.85,-3.02l-5.36,-0.38l-12.7,0.58l-2.78,-1.57l-3.66,-2.77l5.73,-1.45l5.0,-0.28l0.38,-0.38l-0.35,-0.41l-10.67,-1.38l-5.3,-2.06l0.25,-1.54l18.41,-5.26l1.22,-2.27l-0.25,-0.55l-6.14,-1.86l1.68,-1.77l8.55,-4.03l3.59,-0.63l0.3,-0.54l-0.88,-2.27l5.47,-1.47l7.65,-0.95l7.55,-0.05l3.04,1.85l6.48,-3.27l5.81,2.22l3.56,0.5l5.16,1.94l0.5,-0.21l-0.17,-0.52l-5.71,-3.13l0.28,-2.13l8.12,-3.6l8.7,0.28l3.35,-2.34l8.71,-0.6l19.93,0.8Z" data-code="GL" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M540.81,207.91l0.37,0.86l-0.17,0.76l0.6,1.53l-0.95,0.04l-0.82,-1.28l-1.57,-0.18l1.31,-1.88l1.22,0.17Z" data-code="KW" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M420.53,257.51l-0.01,0.72l0.96,1.2l0.24,3.73l0.59,0.95l-0.51,2.1l0.19,1.41l1.02,2.21l-6.97,2.84l-1.8,-0.57l0.04,-0.89l-1.02,-2.04l0.61,-2.65l1.07,-2.32l-0.96,-6.47l5.01,0.07l0.94,-0.39l0.61,0.11Z" data-code="GH" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M568.09,230.93l-0.91,1.67l-1.22,0.04l-0.6,0.76l-0.41,1.51l0.27,1.58l-1.16,0.05l-1.56,0.97l-0.76,1.74l-1.62,0.05l-0.98,0.65l-0.17,1.15l-0.89,0.52l-1.49,-0.18l-2.4,0.94l-2.47,-5.4l7.35,-2.71l1.67,-5.23l-1.12,-2.09l0.05,-0.83l0.67,-1.0l0.07,-1.05l0.9,-0.42l-0.05,-2.07l0.7,-0.01l1.0,1.62l1.51,1.08l3.3,0.84l1.73,2.29l0.81,0.37l-1.23,2.35l-0.99,0.79Z" data-code="OM" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M531.15,258.94l1.51,0.12l5.13,-0.95l5.3,-1.48l-0.01,4.4l-2.67,3.39l-1.85,0.01l-8.04,-2.94l-2.55,-3.17l1.12,-1.71l2.04,2.34Z" data-code="_1" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M472.77,172.64l-1.08,-1.29l0.96,-0.77l0.29,-0.83l1.98,1.64l-0.36,0.67l-1.79,0.58Z" data-code="_0" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M518.64,201.38l-5.14,1.56l-0.19,0.65l2.16,2.39l-0.89,1.14l-1.71,0.34l-1.71,1.8l-2.34,-0.37l1.21,-4.32l0.56,-4.07l2.8,0.94l4.46,-2.71l0.79,2.66Z" data-code="JO" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M455.59,162.84l1.09,0.07l-0.82,0.94l-0.27,-1.01ZM456.96,162.92l0.62,-0.41l1.73,0.45l0.42,-0.4l-0.01,-0.59l0.86,-0.52l0.2,-1.05l1.63,-0.68l2.57,1.68l2.07,0.6l0.87,-0.31l1.05,1.57l-0.52,0.63l-1.05,-0.56l-1.68,0.04l-2.1,-0.5l-1.29,0.06l-0.57,0.49l-0.59,-0.47l-0.62,0.16l-0.46,1.7l1.79,2.42l2.79,2.75l-1.18,-0.87l-2.21,-0.87l-1.67,-1.78l0.13,-0.63l-1.05,-1.19l-0.32,-1.27l-1.42,-0.43Z" data-code="HR" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M237.05,238.38l-1.16,0.43l-0.91,-0.55l0.05,-0.2l2.02,0.31ZM237.53,238.43l1.06,0.12l-0.05,0.01l-1.01,-0.12ZM239.25,238.45l0.79,-0.51l0.06,-0.62l-1.02,-1.0l0.02,-0.82l-0.3,-0.4l-0.93,-0.32l3.16,0.45l0.02,1.84l-0.48,0.34l-0.08,0.58l0.54,0.72l-1.78,-0.26Z" data-code="HT" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M462.08,157.89l0.65,-1.59l-0.09,-0.44l0.64,-0.0l0.39,-0.34l0.1,-0.69l1.75,0.87l2.32,-0.37l0.43,-0.66l3.49,-0.78l0.69,-0.78l0.57,-0.14l2.57,0.93l0.67,-0.23l1.03,0.65l0.08,0.37l-1.42,0.71l-2.59,4.14l-1.8,0.53l-1.68,-0.1l-2.74,1.23l-1.85,-0.54l-2.54,-1.66l-0.66,-1.1Z" data-code="HU" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M199.6,249.52l-1.7,-1.21l0.06,-0.94l3.04,-2.14l2.37,0.28l1.27,-0.09l1.1,-0.52l1.3,0.28l1.14,-0.25l1.38,0.37l2.23,1.37l-2.36,0.93l-1.23,-0.39l-0.88,1.3l-1.28,0.99l-0.98,-0.22l-0.42,0.52l-0.96,0.05l-0.36,0.41l0.04,0.88l-0.52,0.6l-0.3,0.04l-0.3,-0.55l-0.66,-0.31l0.11,-0.67l-0.48,-0.65l-0.87,-0.26l-0.73,0.2Z" data-code="HN" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M256.17,238.73l-0.26,0.27l-2.83,0.05l-0.07,-0.55l1.95,-0.1l1.22,0.33Z" data-code="PR" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M509.21,203.07l0.1,-0.06l-0.02,0.03l-0.09,0.03ZM509.36,202.91l-0.02,-0.63l-0.33,-0.16l0.31,-1.09l0.24,0.1l-0.2,1.78Z" data-code="PS" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M401.84,187.38l-0.64,0.47l-1.13,-0.35l-0.91,0.17l0.28,-1.78l-0.24,-1.78l-1.25,-0.56l-0.45,-0.84l0.17,-1.66l1.01,-1.18l0.69,-2.92l-0.04,-1.39l-0.59,-1.9l1.3,-0.85l0.84,1.35l3.1,-0.3l0.46,0.99l-1.05,0.94l-0.03,2.16l-0.41,0.57l-0.08,1.1l-0.79,0.18l-0.26,0.59l0.91,1.6l-0.63,1.75l0.76,1.09l-1.1,1.52l0.07,1.05Z" data-code="PT" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M274.9,336.12l0.74,1.52l-0.16,3.45l0.32,0.41l2.64,0.5l1.11,-0.47l1.4,0.59l0.36,0.6l0.53,3.42l1.27,0.4l0.98,-0.38l0.51,0.27l-0.0,1.18l-1.21,5.32l-2.09,1.9l-1.8,0.4l-4.71,-0.98l2.2,-3.63l-0.32,-1.5l-2.78,-1.28l-3.03,-1.94l-2.07,-0.44l-4.34,-4.06l0.91,-2.9l0.08,-1.42l1.07,-2.04l4.13,-0.72l2.18,0.03l2.05,1.17l0.03,0.59Z" data-code="PY" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M213.8,263.68l0.26,-1.52l-0.36,-0.26l-0.01,-0.49l0.44,-0.1l0.93,1.4l1.26,0.03l0.77,0.49l1.38,-0.23l2.51,-1.11l0.86,-0.72l3.45,0.85l1.4,1.18l0.41,1.74l-0.21,0.34l-0.53,-0.12l-0.47,0.29l-0.16,0.6l-0.68,-1.28l0.45,-0.49l-0.19,-0.66l-0.47,-0.13l-0.54,-0.84l-1.5,-0.75l-1.1,0.16l-0.75,0.99l-1.62,0.84l-0.18,0.96l0.85,0.97l-0.58,0.45l-0.69,0.08l-0.34,-1.18l-1.27,0.03l-0.71,-1.05l-2.59,-0.46Z" data-code="PA" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M808.58,298.86l2.54,2.56l-0.13,0.26l-0.33,0.12l-0.87,-0.78l-1.22,-2.16ZM801.41,293.04l0.5,0.29l0.26,0.27l-0.49,-0.35l-0.27,-0.21ZM803.17,294.58l0.59,0.5l0.08,1.06l-0.29,-0.91l-0.38,-0.65ZM796.68,298.41l0.52,0.75l1.43,-0.19l2.27,-1.81l-0.01,-1.43l1.12,0.16l-0.04,1.1l-0.7,1.28l-1.12,0.18l-0.62,0.79l-2.46,1.11l-1.17,-0.0l-3.08,-1.25l3.41,0.0l0.45,-0.68ZM789.15,303.55l2.31,1.8l1.59,2.61l1.34,0.13l-0.06,0.66l0.31,0.43l1.06,0.24l0.06,0.65l2.25,1.05l-1.22,0.13l-0.72,-0.63l-4.56,-0.65l-3.22,-2.87l-1.49,-2.34l-3.27,-1.1l-2.38,0.72l-1.59,0.86l-0.2,0.42l0.27,1.55l-1.55,0.68l-1.36,-0.4l-2.21,-0.09l-0.08,-15.41l8.39,2.93l2.95,2.4l0.6,1.64l4.02,1.49l0.31,0.68l-1.76,0.21l-0.33,0.52l0.55,1.68Z" data-code="PG" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M244.96,295.21l-1.26,-0.07l-0.57,0.42l-1.93,0.45l-2.98,1.75l-0.36,1.36l-0.58,0.8l0.12,1.37l-1.24,0.59l-0.22,1.22l-0.62,0.84l1.04,2.27l1.28,1.44l-0.41,0.84l0.32,0.57l1.48,0.13l1.16,1.37l2.21,0.07l1.63,-1.08l-0.13,3.02l0.3,0.4l1.14,0.29l1.31,-0.34l1.9,3.59l-0.48,0.85l-0.17,3.85l-0.94,1.59l0.35,0.75l-0.47,1.07l0.98,1.97l-2.1,3.82l-0.98,0.5l-2.17,-1.28l-0.39,-1.16l-4.95,-2.58l-4.46,-2.79l-1.84,-1.51l-0.91,-1.84l0.3,-0.96l-2.11,-3.33l-4.82,-9.68l-1.04,-1.2l-0.87,-1.94l-3.4,-2.48l0.58,-1.18l-1.13,-2.23l0.66,-1.49l1.45,-1.15l-0.6,0.98l0.07,0.92l0.47,0.36l1.74,0.03l0.97,1.17l0.54,0.07l1.42,-1.03l0.6,-1.84l1.42,-2.02l3.04,-1.04l2.73,-2.62l0.86,-1.74l-0.1,-1.87l1.44,1.02l0.9,1.25l1.06,0.59l1.7,2.73l1.86,0.31l1.45,-0.61l0.96,0.39l1.36,-0.19l1.45,0.89l-1.4,2.21l0.31,0.61l0.59,0.05l0.47,0.5Z" data-code="PE" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M615.09,192.34l-1.83,1.81l-2.6,0.39l-3.73,-0.68l-1.58,1.33l-0.09,0.42l1.77,4.39l1.7,1.23l-1.69,1.27l-0.12,2.14l-2.33,2.64l-1.6,2.8l-2.46,2.67l-3.03,-0.07l-2.76,2.83l0.05,0.6l1.5,1.11l0.26,1.9l1.44,1.5l0.37,1.68l-5.01,-0.01l-1.78,1.7l-1.42,-0.52l-0.76,-1.87l-2.27,-2.15l-11.61,0.86l0.71,-2.34l3.43,-1.32l0.25,-0.44l-0.21,-1.24l-1.2,-0.65l-0.28,-2.46l-2.29,-1.14l-1.28,-1.94l2.82,0.94l2.62,-0.38l1.42,0.33l0.76,-0.56l1.71,0.19l3.25,-1.14l0.27,-0.36l0.08,-2.19l1.18,-1.32l1.68,0.0l0.58,-0.82l1.6,-0.3l1.19,0.16l0.98,-0.78l0.02,-1.88l0.93,-1.47l1.48,-0.66l0.19,-0.55l-0.66,-1.25l2.04,-0.11l0.69,-1.01l-0.02,-1.16l1.11,-1.06l-0.17,-1.78l-0.49,-1.03l1.15,-0.98l5.42,-0.91l2.6,-0.82l1.6,1.16l0.97,2.34l3.45,0.97Z" data-code="PK" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M737.01,263.84l0.39,2.97l-0.44,1.18l-0.55,-1.53l-0.67,-0.14l-1.17,1.28l0.65,2.09l-0.42,0.69l-2.48,-1.23l-0.57,-1.49l0.65,-1.03l-0.1,-0.54l-1.59,-1.19l-0.56,0.08l-0.65,0.87l-1.23,0.0l-1.58,0.97l0.83,-1.8l2.56,-1.42l0.65,0.84l0.45,0.13l1.9,-0.69l0.56,-1.11l1.5,-0.06l0.38,-0.43l-0.09,-1.19l1.21,0.71l0.36,2.02ZM733.59,256.58l0.05,0.75l0.08,0.26l-0.8,-0.42l-0.18,-0.71l0.85,0.12ZM734.08,256.1l-0.12,-1.12l-1.0,-1.27l1.36,0.03l0.53,0.73l0.51,2.04l-1.27,-0.4ZM733.76,257.68l0.38,0.98l-0.32,0.15l-0.07,-1.13ZM724.65,238.43l1.46,0.7l0.72,-0.31l-0.32,1.17l0.79,1.71l-0.57,1.84l-1.53,1.04l-0.39,2.25l0.56,2.04l1.63,0.57l1.16,-0.27l2.71,1.23l-0.19,1.08l0.76,0.84l-0.08,0.36l-1.4,-0.9l-0.88,-1.27l-0.66,0.0l-0.38,0.55l-1.6,-1.31l-2.15,0.36l-0.87,-0.39l0.07,-0.61l0.66,-0.55l-0.01,-0.62l-0.75,-0.59l-0.72,0.44l-0.74,-0.87l-0.39,-2.49l0.32,0.27l0.66,-0.28l0.26,-3.97l0.7,-2.02l1.14,0.0ZM731.03,258.87l-0.88,0.85l-1.19,1.94l-1.05,-1.19l0.93,-1.1l0.32,-1.47l0.52,-0.06l-0.27,1.15l0.22,0.45l0.49,-0.12l1.0,-1.32l-0.08,0.85ZM726.83,255.78l0.83,0.38l1.17,-0.0l-0.02,0.48l-2.0,1.4l0.03,-2.26ZM724.81,252.09l-0.38,1.27l-1.42,-1.95l1.2,0.05l0.6,0.63ZM716.55,261.82l1.1,-0.95l0.03,-0.03l-0.28,0.36l-0.85,0.61ZM719.22,259.06l0.04,-0.06l0.8,-1.53l0.16,0.75l-1.0,0.84Z" data-code="PH" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M468.44,149.42l-1.11,-1.54l-1.86,-0.33l-0.48,-1.05l-1.72,-0.37l-0.65,0.69l-0.72,-0.36l0.11,-0.61l-0.33,-0.46l-1.75,-0.27l-1.04,-0.93l-0.94,-1.94l0.16,-1.22l-0.62,-1.8l-0.78,-1.07l0.57,-1.04l-0.48,-1.43l1.41,-0.83l6.91,-2.71l2.14,0.5l0.52,0.91l5.51,0.44l4.55,-0.05l1.07,0.31l0.48,0.84l0.15,1.58l0.65,1.2l-0.01,0.99l-1.27,0.58l-0.19,0.54l0.73,1.48l0.08,1.55l1.2,2.76l-0.17,0.58l-1.23,0.44l-2.27,2.72l0.18,0.95l-1.97,-1.03l-1.98,0.4l-1.36,-0.28l-1.24,0.58l-1.07,-0.97l-1.16,0.24Z" data-code="PL" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M504.91,192.87l0.34,0.01l0.27,-0.07l-0.29,0.26l-0.31,-0.2Z" data-code="-99" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M481.47,313.3l0.39,0.31l2.52,0.14l0.99,1.17l2.01,0.35l1.4,-0.64l0.69,1.17l1.78,0.33l1.84,2.35l2.23,0.18l0.4,-0.43l-0.21,-2.74l-0.62,-0.3l-0.48,0.32l-1.98,-1.17l0.72,-5.29l-0.51,-1.18l0.57,-1.3l3.68,-0.62l0.26,0.63l1.21,0.63l0.9,-0.22l2.16,0.67l1.33,0.71l1.07,1.02l0.56,1.87l-0.88,2.7l0.43,2.09l-0.73,0.87l-0.76,2.37l0.59,0.68l-6.6,1.83l-0.29,0.44l0.19,1.45l-1.68,0.35l-1.43,1.02l-0.38,0.87l-0.87,0.26l-3.48,3.69l-4.16,-0.53l-1.52,-1.0l-1.77,-0.13l-1.83,0.52l-3.04,-3.4l0.11,-7.59l4.82,0.03l0.39,-0.49l-0.18,-0.76l0.33,-0.83l-0.4,-1.36l0.24,-1.05Z" data-code="ZM" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M384.42,230.28l0.25,-0.79l1.06,-1.29l0.8,-3.51l3.38,-2.78l0.7,-1.81l0.06,4.84l-1.98,0.2l-0.94,1.59l0.39,3.56l-3.7,-0.01ZM392.01,218.1l0.7,-1.8l1.77,-0.24l2.09,0.34l0.95,-0.62l1.28,-0.07l-0.0,2.51l-6.79,-0.12Z" data-code="EH" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M485.71,115.04l2.64,0.6l2.56,0.11l-1.6,1.91l0.61,3.54l-0.81,0.87l-1.78,-0.01l-3.22,-1.76l-1.8,0.45l0.21,-1.53l-0.58,-0.41l-0.69,0.34l-1.26,-1.03l-0.17,-1.63l2.83,-0.92l3.05,-0.52Z" data-code="EE" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M492.06,205.03l1.46,0.42l2.95,-1.64l2.04,-0.21l1.53,0.3l0.59,1.19l0.69,0.04l0.41,-0.64l1.81,0.58l1.95,0.16l1.04,-0.51l1.42,4.08l-2.03,4.54l-1.66,-1.77l-1.76,-3.85l-0.64,-0.12l-0.36,0.67l1.04,2.88l3.44,6.95l1.78,3.04l2.03,2.65l-0.36,0.53l0.23,2.01l2.7,2.19l-28.41,0.0l0.0,-18.96l-0.73,-2.2l0.59,-1.56l-0.32,-1.26l0.68,-0.99l3.06,-0.04l4.82,1.52Z" data-code="EG" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M467.14,373.21l-0.13,-1.96l-0.68,-1.56l0.7,-0.68l-0.13,-2.33l-4.56,-8.19l0.77,-0.86l0.6,0.45l0.69,1.31l2.83,0.72l1.5,-0.26l2.24,-1.39l0.19,-9.55l1.35,2.3l-0.21,1.5l0.61,1.2l0.4,0.19l1.79,-0.27l2.6,-2.07l0.69,-1.32l0.96,-0.48l2.19,1.04l2.04,0.13l1.77,-0.65l0.85,-2.12l1.38,-0.33l1.59,-2.76l2.15,-1.89l3.41,-1.87l2.0,0.45l1.02,-0.28l0.99,0.2l1.75,5.29l-0.38,3.25l-0.81,-0.23l-1.0,0.46l-0.87,1.68l-0.05,1.16l1.97,1.84l1.47,-0.29l0.69,-1.18l1.09,0.01l-0.76,3.69l-0.58,1.09l-2.2,1.79l-3.17,4.76l-2.8,2.83l-3.57,2.88l-2.53,1.05l-1.22,0.14l-0.51,0.7l-1.18,-0.32l-1.39,0.5l-2.59,-0.52l-1.61,0.33l-1.18,-0.11l-2.55,1.1l-2.1,0.44l-1.6,1.07l-0.85,0.05l-0.93,-0.89l-0.93,-0.15l-0.97,-1.13l-0.25,0.05ZM491.45,364.19l0.62,-0.93l1.48,-0.59l1.18,-2.19l-0.07,-0.49l-1.99,-1.69l-1.66,0.56l-1.43,1.14l-1.34,1.73l0.02,0.51l1.88,2.11l1.31,-0.16Z" data-code="ZA" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M231.86,285.53l0.29,1.59l-0.69,1.45l-2.61,2.51l-3.13,1.11l-1.53,2.18l-0.49,1.68l-1.0,0.73l-1.02,-1.11l-1.78,-0.16l0.67,-1.15l-0.24,-0.86l1.25,-2.13l-0.54,-1.09l-0.67,-0.08l-0.72,0.87l-0.87,-0.64l0.35,-0.69l-0.36,-1.96l0.81,-0.51l0.45,-1.51l0.92,-1.57l-0.07,-0.97l2.65,-1.33l2.75,1.35l0.77,1.05l2.12,0.35l0.76,-0.32l1.96,1.21Z" data-code="EC" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M470.32,171.8l0.74,0.03l0.92,0.89l-0.17,1.95l0.36,1.28l1.01,0.82l-1.82,2.83l-0.19,-0.61l-1.25,-0.89l-0.18,-1.2l0.53,-2.82l-0.54,-1.47l0.6,-0.83Z" data-code="AL" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M461.55,300.03l1.26,3.15l1.94,2.36l2.47,-0.53l1.25,0.32l0.44,-0.18l0.93,-1.92l1.31,-0.08l0.41,-0.44l0.47,-0.0l-0.1,0.41l0.39,0.49l2.65,-0.02l0.03,1.19l0.48,1.01l-0.34,1.52l0.18,1.55l0.83,1.04l-0.13,2.85l0.54,0.39l3.96,-0.41l-0.1,1.79l0.39,1.05l-0.24,1.43l-4.7,-0.03l-0.4,0.39l-0.12,8.13l2.92,3.49l-3.83,0.88l-5.89,-0.36l-1.88,-1.24l-10.47,0.22l-1.3,-1.01l-1.85,-0.16l-2.4,0.77l-0.15,-1.06l0.33,-2.16l1.0,-3.45l1.35,-3.2l2.24,-2.8l0.33,-2.06l-0.13,-1.53l-0.8,-1.08l-1.21,-2.87l0.87,-1.62l-1.27,-4.12l-1.17,-1.53l2.47,-0.63l7.03,0.03ZM451.71,298.87l-0.47,-1.25l1.25,-1.11l0.32,0.3l-0.99,1.03l-0.12,1.03Z" data-code="AO" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M552.8,172.89l0.46,-1.27l-0.48,-1.05l-2.96,-1.19l-1.06,-2.58l-1.37,-0.87l-0.03,-0.3l1.95,0.23l0.45,-0.38l0.08,-1.96l1.75,-0.41l2.1,0.45l0.48,-0.33l0.45,-3.04l-0.45,-2.09l-0.41,-0.31l-2.42,0.15l-2.36,-0.73l-2.87,1.37l-2.17,0.61l-0.85,-0.34l0.13,-1.61l-1.6,-2.12l-2.02,-0.08l-1.78,-1.82l1.29,-2.18l-0.57,-0.95l1.62,-2.91l2.21,1.63l0.63,-0.27l0.29,-2.22l4.92,-3.43l3.71,-0.08l8.4,3.6l2.92,-1.36l3.77,-0.06l3.11,1.66l0.51,-0.11l0.6,-0.81l3.31,0.13l0.39,-0.25l0.63,-1.57l-0.17,-0.5l-3.5,-1.98l1.87,-1.27l-0.13,-1.03l1.98,-0.72l0.18,-0.62l-1.59,-2.06l0.81,-0.82l9.23,-1.18l1.33,-0.88l6.18,-1.26l2.26,-1.42l4.08,0.68l0.73,3.33l0.51,0.3l2.48,-0.8l2.79,1.02l-0.17,1.56l0.43,0.44l2.55,-0.24l4.89,-2.53l0.03,0.32l3.15,2.61l5.56,8.47l0.65,0.02l1.12,-1.46l3.15,1.74l3.76,-0.78l1.15,0.49l1.14,1.8l1.84,0.76l0.99,1.29l3.35,-0.25l1.02,1.52l-1.6,1.81l-1.93,0.28l-0.34,0.38l-0.11,3.05l-1.13,1.16l-4.75,-1.0l-0.46,0.27l-1.76,5.47l-1.1,0.59l-4.91,1.23l-0.27,0.54l2.1,4.97l-1.37,0.63l-0.23,0.41l0.13,1.13l-0.88,-0.25l-1.42,-1.13l-7.89,-0.4l-0.92,0.31l-3.73,-1.22l-1.42,0.63l-0.53,1.66l-3.72,-0.94l-1.85,0.43l-0.76,1.4l-4.65,2.62l-1.13,2.08l-0.44,0.01l-0.92,-1.4l-2.87,-0.09l-0.45,-2.14l-0.38,-0.32l-0.8,-0.01l0.0,-2.96l-3.0,-2.22l-7.31,0.58l-2.35,-2.68l-6.71,-3.69l-6.45,1.83l-0.29,0.39l0.1,10.85l-0.7,0.08l-1.62,-2.17l-1.83,-0.96l-3.11,0.59l-0.64,0.51Z" data-code="KZ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M516.04,247.79l1.1,0.84l1.63,-0.45l0.68,0.47l1.63,0.03l2.01,0.94l1.73,1.66l1.64,2.07l-1.52,2.04l0.16,1.72l0.39,0.38l2.05,0.0l-0.36,1.03l2.86,3.58l8.32,3.08l1.31,0.02l-6.32,6.75l-3.1,0.11l-2.36,1.77l-1.47,0.04l-0.86,0.79l-1.38,-0.0l-1.32,-0.81l-2.29,1.05l-0.76,0.98l-3.29,-0.41l-3.07,-2.07l-1.8,-0.07l-0.62,-0.6l0.0,-1.24l-0.28,-0.38l-1.15,-0.37l-1.4,-2.59l-1.19,-0.68l-0.47,-1.0l-1.27,-1.23l-1.16,-0.22l0.43,-0.72l1.45,-0.28l0.41,-0.95l-0.03,-2.21l0.68,-2.44l1.05,-0.63l1.43,-3.06l1.57,-1.37l1.02,-2.51l0.35,-1.88l2.52,0.46l0.44,-0.24l0.58,-1.43Z" data-code="ET" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M498.91,341.09l-1.11,-0.22l-0.92,0.28l-2.09,-0.44l-1.5,-1.11l-1.89,-0.43l-0.62,-1.4l-0.01,-0.84l-0.3,-0.38l-0.97,-0.25l-2.71,-2.74l-1.92,-3.32l3.83,0.45l3.73,-3.82l1.08,-0.44l0.26,-0.77l1.25,-0.9l1.41,-0.26l0.5,0.89l1.99,-0.05l1.72,1.17l1.11,0.17l1.05,0.66l0.01,2.99l-0.59,3.76l0.38,0.86l-0.23,1.23l-0.39,0.35l-0.63,1.81l-2.43,2.75Z" data-code="ZW" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M416.0,169.21l1.07,1.17l4.61,1.38l1.06,-0.57l2.6,1.26l2.71,-0.3l0.09,1.12l-2.14,1.8l-3.11,0.61l-0.31,0.31l-0.2,0.89l-1.54,1.69l-0.97,2.4l0.84,1.74l-1.32,1.27l-0.48,1.68l-1.88,0.65l-1.66,2.07l-5.36,-0.01l-1.79,1.08l-0.89,0.98l-0.88,-0.17l-0.79,-0.82l-0.68,-1.59l-2.37,-0.63l-0.11,-0.5l1.21,-1.82l-0.77,-1.13l0.61,-1.68l-0.76,-1.62l0.87,-0.49l0.09,-1.25l0.42,-0.6l0.03,-2.11l0.99,-0.69l0.13,-0.5l-1.03,-1.73l-1.46,-0.11l-0.61,0.38l-1.06,0.0l-0.52,-1.23l-0.53,-0.21l-1.32,0.67l-0.01,-1.49l-0.75,-0.96l3.03,-1.88l2.99,0.53l3.32,-0.02l2.63,0.51l6.01,-0.06Z" data-code="ES" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M520.38,246.23l3.42,2.43l3.5,3.77l0.84,0.54l-0.95,-0.01l-3.51,-3.89l-2.33,-1.15l-1.73,-0.07l-0.91,-0.51l-1.26,0.51l-1.34,-1.02l-0.61,0.17l-0.66,1.61l-2.35,-0.43l-0.17,-0.67l1.29,-5.29l0.61,-0.61l1.95,-0.53l0.87,-1.01l1.17,2.41l0.68,2.33l1.49,1.43Z" data-code="ER" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M468.91,172.53l-1.22,-1.02l0.47,-1.81l0.89,-0.72l2.26,1.51l-0.5,0.57l-0.75,-0.27l-1.14,1.73Z" data-code="ME" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M488.41,153.73l1.4,-0.27l1.72,0.93l1.07,0.15l0.85,0.65l-0.14,0.84l0.96,0.85l1.12,2.47l-1.15,-0.07l-0.66,-0.41l-0.52,0.25l-0.09,0.86l-1.08,1.89l-0.27,-0.86l0.25,-1.34l-0.16,-1.6l-3.29,-4.34Z" data-code="MD" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M545.91,319.14l0.4,3.03l0.62,1.21l-0.21,1.02l-0.57,-0.8l-0.69,-0.01l-0.47,0.76l0.41,2.12l-0.18,0.87l-0.73,0.78l-0.15,2.14l-4.71,15.2l-1.06,2.88l-3.92,1.64l-3.12,-1.49l-0.6,-1.21l-0.19,-2.4l-0.86,-2.05l-0.21,-1.77l0.38,-1.62l1.21,-0.75l0.01,-0.76l1.19,-2.04l0.23,-1.66l-1.06,-2.99l-0.19,-2.21l0.81,-1.33l0.32,-1.46l4.63,-1.22l3.44,-3.0l0.85,-1.4l-0.08,-0.7l0.78,-0.04l1.38,-1.77l0.13,-1.64l0.45,-0.61l1.16,1.69l0.59,1.6Z" data-code="MG" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M378.78,230.02l0.06,-0.59l0.92,-0.73l0.82,-1.37l-0.09,-1.04l0.79,-1.7l1.31,-1.58l0.96,-0.59l0.66,-1.55l0.09,-1.47l0.81,-1.48l1.72,-1.07l1.55,-2.69l1.16,-0.96l2.44,-0.39l1.94,-1.82l1.31,-0.78l2.09,-2.28l-0.51,-3.65l1.24,-3.7l1.5,-1.75l4.46,-2.57l2.37,-4.47l1.44,0.01l1.68,1.21l2.32,-0.19l3.47,0.65l0.8,1.54l0.16,1.71l0.86,2.96l0.56,0.59l-0.26,0.61l-3.05,0.44l-1.26,1.05l-1.33,0.22l-0.33,0.37l-0.09,1.78l-2.68,1.0l-1.07,1.42l-4.47,1.13l-4.04,2.01l-0.54,4.64l-1.15,0.06l-0.92,0.61l-1.96,-0.35l-2.42,0.54l-0.74,1.9l-0.86,0.4l-1.14,3.26l-3.53,3.01l-0.8,3.55l-0.96,1.1l-0.29,0.82l-4.95,0.18Z" data-code="MA" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M598.64,172.75l-1.63,1.52l0.06,0.64l1.85,1.12l1.97,-0.64l2.21,1.17l-2.52,1.68l-2.59,-0.22l-0.18,-0.41l0.46,-1.23l-0.45,-0.53l-3.35,0.69l-2.1,3.51l-1.87,-0.12l-1.03,1.51l0.22,0.55l1.64,0.62l0.46,1.83l-1.19,2.49l-2.66,-0.53l0.05,-1.36l-0.26,-0.39l-3.3,-1.23l-2.56,-1.4l-4.4,-3.34l-1.34,-3.14l-1.08,-0.6l-2.58,0.13l-0.69,-0.44l-0.47,-2.52l-3.37,-1.6l-0.43,0.05l-2.07,1.72l-2.1,1.01l-0.21,0.47l0.28,1.01l-1.91,0.03l-0.09,-10.5l5.99,-1.7l6.19,3.54l2.71,2.84l7.05,-0.67l2.71,2.01l-0.17,2.81l0.39,0.42l0.9,0.02l0.44,2.14l0.38,0.32l2.94,0.09l0.95,1.42l1.28,-0.24l1.05,-2.04l4.43,-2.5Z" data-code="UZ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M673.9,230.21l-1.97,1.57l-0.57,0.96l-1.4,0.6l-1.36,1.05l-1.99,0.36l-1.08,2.66l-0.91,0.4l-0.19,0.55l1.21,2.27l2.52,3.43l-0.79,1.91l-0.74,0.41l-0.17,0.52l0.65,1.37l1.61,1.95l0.25,2.58l0.9,2.13l-1.92,3.57l0.68,-2.25l-0.81,-1.74l0.19,-2.65l-1.05,-1.53l-1.24,-6.17l-1.12,-2.26l-0.6,-0.13l-4.34,3.02l-2.39,-0.65l0.77,-2.84l-0.52,-2.61l-1.91,-2.96l0.25,-0.75l-0.29,-0.51l-1.33,-0.3l-1.61,-1.93l-0.1,-1.3l0.82,-0.24l0.04,-1.64l1.02,-0.52l0.21,-0.45l-0.23,-0.95l0.54,-0.96l0.08,-2.22l1.46,0.45l0.47,-0.2l1.12,-2.19l0.16,-1.35l1.33,-2.16l-0.0,-1.52l2.89,-1.66l1.63,0.44l0.5,-0.44l-0.17,-1.4l0.64,-0.36l0.08,-1.04l0.77,-0.11l0.71,1.35l1.06,0.69l-0.03,3.86l-2.38,2.37l-0.3,3.15l0.46,0.43l2.28,-0.38l0.51,2.08l1.47,0.67l-0.6,1.8l0.19,0.48l2.97,1.48l1.64,-0.55l0.02,0.32Z" data-code="MM" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M392.61,254.08l-0.19,-2.37l-0.99,-0.87l-0.44,-1.3l-0.09,-1.28l0.81,-0.58l0.35,-1.24l2.37,0.65l1.31,-0.47l0.86,0.15l0.66,-0.56l9.83,-0.04l0.38,-0.28l0.56,-1.8l-0.44,-0.65l-2.35,-21.95l3.27,-0.04l16.7,11.38l0.74,1.31l2.5,1.09l0.02,1.38l0.44,0.39l2.34,-0.21l0.01,5.38l-1.28,1.61l-0.26,1.49l-5.31,0.57l-1.07,0.92l-2.9,0.1l-0.86,-0.48l-1.38,0.36l-2.4,1.08l-0.6,0.87l-1.85,1.09l-0.43,0.7l-0.79,0.39l-1.44,-0.21l-0.81,0.84l-0.34,1.64l-1.91,2.02l-0.06,1.03l-0.67,1.22l0.13,1.16l-0.97,0.39l-0.23,-0.64l-0.52,-0.24l-1.35,0.4l-0.34,0.55l-2.69,-0.28l-0.37,-0.35l-0.02,-0.9l-0.65,-0.35l0.45,-0.64l-0.03,-0.53l-2.12,-2.44l-0.76,-0.01l-2.0,1.16l-0.78,-0.15l-0.8,-0.67l-1.21,0.23Z" data-code="ML" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M676.61,146.48l3.81,1.68l5.67,-1.0l2.37,0.41l2.34,1.5l1.79,1.75l2.29,-0.03l3.12,0.52l2.47,-0.81l3.41,-0.59l3.53,-2.21l1.25,0.29l1.53,1.13l2.27,-0.21l-2.66,5.01l0.64,1.68l0.47,0.21l1.32,-0.38l2.38,0.48l2.02,-1.11l1.76,0.89l2.06,2.02l-0.13,0.53l-1.72,-0.29l-3.77,0.46l-1.88,0.99l-1.76,1.99l-3.71,1.17l-2.45,1.6l-3.83,-0.87l-0.41,0.17l-1.31,1.99l1.04,2.24l-1.52,0.9l-1.74,1.57l-2.79,1.02l-3.78,0.13l-4.05,1.05l-2.77,1.52l-1.16,-0.85l-2.94,0.0l-3.62,-1.79l-2.58,-0.49l-3.4,0.41l-5.12,-0.67l-2.63,0.06l-1.31,-1.6l-1.4,-3.0l-1.48,-0.33l-3.13,-1.94l-6.16,-0.93l-0.71,-1.06l0.86,-3.82l-1.93,-2.71l-3.5,-1.18l-1.95,-1.58l-0.5,-1.72l2.34,-0.52l4.75,-2.8l3.62,-1.47l2.18,0.97l2.46,0.05l1.81,1.53l2.46,0.12l3.95,0.71l2.43,-2.28l0.08,-0.48l-0.9,-1.72l2.24,-2.98l2.62,1.27l4.94,1.17l0.43,2.24Z" data-code="MN" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M472.8,173.98l0.49,-0.71l3.57,-0.71l1.0,0.77l0.13,1.45l-0.65,0.53l-1.15,-0.05l-1.12,0.67l-1.39,0.22l-0.79,-0.55l-0.29,-1.03l0.19,-0.6Z" data-code="MK" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M505.5,309.31l0.85,1.95l0.15,2.86l-0.69,1.65l0.71,1.8l0.06,1.28l0.49,0.64l0.07,1.06l0.4,0.55l0.8,-0.23l0.55,0.61l0.69,-0.21l0.34,0.6l0.19,2.94l-1.04,0.62l-0.54,1.25l-1.11,-1.08l-0.16,-1.56l0.51,-1.31l-0.32,-1.3l-0.99,-0.65l-0.82,0.12l-2.36,-1.64l0.63,-1.96l0.82,-1.18l-0.46,-2.01l0.9,-2.86l-0.94,-2.51l0.96,0.18l0.29,0.4Z" data-code="MW" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M407.36,220.66l-2.58,0.03l-0.39,0.44l2.42,22.56l0.36,0.43l-0.39,1.24l-9.75,0.04l-0.56,0.53l-0.91,-0.11l-1.27,0.45l-1.61,-0.66l-0.97,0.03l-0.36,0.29l-0.38,1.35l-0.42,0.23l-2.93,-3.4l-2.96,-1.52l-1.62,-0.03l-1.27,0.54l-1.12,-0.2l-0.65,0.4l-0.08,-0.49l0.68,-1.29l0.31,-2.43l-0.57,-3.91l0.23,-1.21l-0.69,-1.5l-1.15,-1.02l0.25,-0.39l9.58,0.02l0.4,-0.45l-0.46,-3.68l0.47,-1.04l2.12,-0.21l0.36,-0.4l-0.08,-6.4l7.81,0.13l0.41,-0.4l0.01,-3.31l7.76,5.35Z" data-code="MR" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M498.55,276.32l0.7,-0.46l1.65,0.5l1.96,-0.57l1.7,0.01l1.45,-0.98l0.91,1.33l1.33,3.95l-2.57,4.03l-1.46,-0.4l-2.54,0.91l-1.37,1.61l-0.01,0.81l-2.42,-0.01l-2.26,1.01l-0.17,-1.59l0.58,-1.04l0.14,-1.94l1.37,-2.28l1.78,-1.58l-0.17,-0.65l-0.72,-0.24l0.13,-2.43Z" data-code="UG" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M717.47,273.46l-1.39,0.65l-2.12,-0.41l-2.88,-0.0l-0.38,0.28l-0.84,2.75l-0.99,0.96l-1.21,3.29l-1.73,0.45l-2.45,-0.68l-1.39,0.31l-1.33,1.15l-1.59,-0.14l-1.41,0.44l-1.44,-1.19l-0.18,-0.73l1.34,0.53l1.93,-0.47l0.75,-2.22l4.02,-1.03l2.75,-3.21l0.82,0.94l0.64,-0.05l0.4,-0.65l0.96,0.06l0.42,-0.36l0.24,-2.68l1.81,-1.64l1.21,-1.86l0.63,-0.01l1.07,1.05l0.34,1.28l3.44,1.35l-0.06,0.35l-1.37,0.1l-0.35,0.54l0.32,0.88ZM673.68,269.59l0.17,1.09l0.47,0.33l1.65,-0.3l0.87,-0.94l1.61,1.52l0.98,1.56l-0.12,2.81l0.41,2.29l0.95,0.9l0.88,2.44l-1.27,0.12l-5.1,-3.67l-0.34,-1.29l-1.37,-1.59l-0.33,-1.97l-0.88,-1.4l0.25,-1.68l-0.46,-1.05l1.63,0.84Z" data-code="MY" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M133.12,200.41l0.2,0.47l9.63,3.33l6.96,-0.02l0.4,-0.4l0.0,-0.74l3.77,0.0l3.55,2.93l1.39,2.83l1.52,1.04l2.08,0.82l0.47,-0.14l1.46,-2.0l1.73,-0.04l1.59,0.98l2.05,3.35l1.47,1.56l1.26,3.14l2.18,1.02l2.26,0.58l-1.18,3.72l-0.42,5.04l1.79,4.89l1.62,1.89l0.61,1.52l1.2,1.42l2.55,0.66l1.37,1.1l7.54,-1.89l1.86,-1.3l1.14,-4.3l4.1,-1.21l3.57,-0.11l0.32,0.3l-0.06,0.94l-1.26,1.45l-0.67,1.71l0.38,0.7l-0.72,2.27l-0.49,-0.3l-1.0,0.08l-1.0,1.39l-0.47,-0.11l-0.53,0.47l-4.26,-0.02l-0.4,0.4l-0.0,1.06l-1.1,0.26l0.1,0.44l1.82,1.44l0.56,0.91l-3.19,0.21l-1.21,2.09l0.24,0.72l-0.2,0.44l-2.24,-2.18l-1.45,-0.93l-2.22,-0.69l-1.52,0.22l-3.07,1.16l-10.55,-3.85l-2.86,-1.96l-3.78,-0.92l-1.08,-1.19l-2.62,-1.43l-1.18,-1.54l-0.38,-0.81l0.66,-0.63l-0.18,-0.53l0.52,-0.76l0.01,-0.91l-2.0,-3.82l-2.21,-2.63l-2.53,-2.09l-1.19,-1.62l-2.2,-1.17l-0.3,-0.43l0.34,-1.48l-0.21,-0.45l-1.23,-0.6l-1.36,-1.2l-0.59,-1.78l-1.54,-0.47l-2.44,-2.55l-0.16,-0.9l-1.33,-2.03l-0.84,-1.99l-0.16,-1.33l-1.81,-1.1l-0.97,0.05l-1.31,-0.7l-0.57,0.22l-0.4,1.12l0.72,3.77l3.51,3.89l0.28,0.78l0.53,0.26l0.41,1.43l1.33,1.73l1.58,1.41l0.8,2.39l1.43,2.41l0.13,1.32l0.37,0.36l1.04,0.08l1.67,2.28l-0.85,0.76l-0.66,-1.51l-1.68,-1.54l-2.91,-1.87l0.06,-1.82l-0.54,-1.68l-2.91,-2.03l-0.55,0.09l-1.95,-1.1l-0.88,-0.94l0.68,-0.08l0.93,-1.01l0.08,-1.78l-1.93,-1.94l-1.46,-0.77l-3.75,-7.56l4.88,-0.42Z" data-code="MX" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M839.04,322.8l0.22,1.14l-0.44,0.03l-0.2,-1.45l0.42,0.27Z" data-code="VU" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M444.48,172.62l-0.64,1.78l-0.58,-0.31l-0.49,-1.72l0.4,-0.89l1.0,-0.72l0.3,1.85ZM429.64,147.1l1.78,1.58l1.46,-0.13l2.1,1.42l1.35,0.27l1.23,0.83l3.04,0.5l-1.03,1.85l-0.3,2.12l-0.41,0.32l-0.95,-0.24l-0.5,0.43l0.06,0.61l-1.81,1.92l-0.04,1.42l0.55,0.38l0.88,-0.36l0.61,0.97l-0.03,1.0l0.57,0.91l-0.75,1.09l0.65,2.39l1.27,0.57l-0.18,0.82l-2.01,1.53l-4.77,-0.8l-3.82,1.0l-0.53,1.85l-2.49,0.34l-2.71,-1.31l-1.16,0.57l-4.31,-1.29l-0.72,-0.86l1.19,-1.78l0.39,-6.45l-2.58,-3.3l-1.9,-1.66l-3.72,-1.23l-0.19,-1.72l2.81,-0.61l4.12,0.81l0.47,-0.48l-0.6,-2.77l1.94,0.95l5.83,-2.54l0.92,-2.74l1.6,-0.49l0.24,0.78l1.36,0.33l1.05,1.19ZM289.01,278.39l-0.81,0.8l-0.78,0.12l-0.5,-0.66l-0.56,-0.1l-0.91,0.6l-0.46,-0.22l1.09,-2.96l-0.96,-1.77l-0.17,-1.49l1.07,-1.77l2.32,0.75l2.51,2.01l0.3,0.74l-2.14,3.96Z" data-code="FR" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M492.17,76.39l-0.23,3.5l3.52,2.63l-2.08,2.88l-0.02,0.44l2.8,4.56l-1.59,3.31l2.16,3.24l-0.94,2.39l0.14,0.47l3.44,2.51l-0.77,1.62l-7.52,6.95l-4.5,0.31l-4.38,1.37l-3.8,0.74l-1.44,-1.96l-2.17,-1.11l0.5,-3.66l-1.16,-3.33l1.09,-2.08l2.21,-2.42l5.67,-4.32l1.64,-0.83l0.21,-0.42l-0.46,-2.02l-3.38,-1.89l-0.75,-1.43l-0.22,-6.74l-6.79,-4.8l0.8,-0.62l2.54,2.12l3.46,-0.12l3.0,0.96l2.51,-2.11l1.17,-3.08l3.55,-1.38l2.76,1.53l-0.95,2.79Z" data-code="FI" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M871.53,326.34l-2.8,1.05l-0.08,-0.23l2.97,-1.21l-0.1,0.39ZM867.58,329.25l0.43,0.37l-0.27,0.88l-1.24,0.28l-1.04,-0.24l-0.14,-0.66l0.63,-0.58l0.92,0.26l0.7,-0.31Z" data-code="FJ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M274.36,425.85l1.44,1.08l-0.47,0.73l-3.0,0.89l-0.96,-1.0l-0.52,-0.05l-1.83,1.29l-0.73,-0.88l2.46,-1.64l1.93,0.76l1.67,-1.19Z" data-code="FK" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M202.33,252.67l0.81,-0.18l1.03,-1.02l-0.04,-0.88l0.68,-0.0l0.63,-0.54l0.97,0.22l1.53,-1.26l0.58,-0.99l1.17,0.34l2.41,-0.94l0.13,1.32l-0.81,1.94l0.1,2.74l-0.36,0.37l-0.11,1.75l-0.47,0.81l0.18,1.14l-1.73,-0.85l-0.71,0.27l-1.47,-0.6l-0.52,0.16l-4.01,-3.81Z" data-code="NI" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M430.31,143.39l0.6,-0.5l2.13,-4.8l3.2,-1.33l1.74,0.08l0.33,0.8l-0.59,2.92l-0.5,0.99l-1.26,0.0l-0.4,0.45l0.33,2.7l-2.2,-1.78l-2.62,0.58l-0.75,-0.11Z" data-code="NL" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M491.44,67.41l6.8,2.89l-2.29,0.86l-0.15,0.65l2.33,2.38l-4.98,1.79l0.84,-2.45l-0.18,-0.48l-3.55,-1.8l-3.89,1.52l-1.42,3.38l-2.12,1.72l-2.64,-1.0l-3.11,0.21l-2.66,-2.22l-0.5,-0.01l-1.41,1.1l-1.44,0.17l-0.35,0.35l-0.32,2.47l-4.32,-0.64l-0.44,0.29l-0.58,2.11l-2.45,0.2l-4.15,7.68l-3.88,5.76l0.78,1.62l-0.64,1.16l-2.24,-0.06l-0.38,0.24l-1.66,3.89l0.15,5.17l1.57,2.04l-0.78,4.16l-2.02,2.48l-0.85,1.63l-1.3,-1.75l-0.58,-0.07l-4.87,4.19l-3.1,0.79l-3.16,-1.7l-0.85,-3.77l-0.77,-8.55l2.14,-2.31l6.55,-3.27l5.02,-4.17l10.63,-13.84l10.98,-8.7l5.35,-1.91l4.34,0.12l3.69,-3.64l4.49,0.19l4.37,-0.89ZM484.55,20.04l4.26,1.75l-3.1,2.55l-7.1,0.65l-7.08,-0.9l-0.37,-1.31l-0.37,-0.29l-3.44,-0.1l-2.08,-2.0l6.87,-1.44l3.9,1.31l2.39,-1.64l6.13,1.4ZM481.69,33.93l-4.45,1.74l-3.54,-0.99l1.12,-0.9l0.05,-0.58l-1.06,-1.22l4.22,-0.89l1.09,1.97l2.57,0.87ZM466.44,24.04l7.43,3.77l-5.41,1.86l-1.58,4.08l-2.26,1.2l-1.12,4.11l-2.61,0.18l-4.79,-2.86l1.84,-1.54l-0.1,-0.68l-3.69,-1.53l-4.77,-4.51l-1.73,-3.89l6.11,-1.82l1.54,1.92l3.57,-0.08l1.2,-1.96l3.32,-0.18l3.05,1.92Z" data-code="NO" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M474.26,330.66l-0.97,0.04l-0.38,0.4l-0.07,8.9l-2.09,0.08l-0.39,0.4l-0.0,17.42l-1.98,1.23l-1.17,0.17l-2.44,-0.66l-0.48,-1.13l-0.99,-0.74l-0.54,0.05l-0.9,1.01l-1.53,-1.68l-0.93,-1.88l-1.99,-8.56l-0.06,-3.12l-0.33,-1.52l-2.3,-3.34l-1.91,-4.83l-1.96,-2.43l-0.12,-1.57l2.33,-0.79l1.43,0.07l1.81,1.13l10.23,-0.25l1.84,1.23l5.87,0.35ZM474.66,330.64l6.51,-1.6l1.9,0.39l-1.69,0.4l-1.31,0.83l-1.12,-0.94l-4.29,0.92Z" data-code="NA" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M838.78,341.24l-0.33,0.22l-2.9,-1.75l-3.26,-3.37l1.65,0.83l4.85,4.07Z" data-code="NC" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M454.75,226.53l1.33,1.37l0.48,0.07l1.27,-0.7l0.53,3.52l0.94,0.83l0.17,0.92l0.81,0.69l-0.44,0.95l-0.96,5.26l-0.13,3.22l-3.04,2.31l-1.22,3.57l1.02,1.24l-0.0,1.46l0.39,0.4l1.13,0.04l-0.9,1.25l-1.47,-2.42l-0.86,-0.29l-2.09,1.37l-1.74,-0.67l-1.45,-0.17l-0.85,0.35l-1.36,-0.07l-1.64,1.09l-1.06,0.05l-2.94,-1.28l-1.44,0.59l-1.01,-0.03l-0.97,-0.94l-2.7,-0.98l-2.69,0.3l-0.87,0.64l-0.47,1.6l-0.75,1.16l-0.12,1.53l-1.57,-1.1l-1.31,0.24l0.03,-0.81l-0.32,-0.41l-2.59,-0.52l-0.15,-1.16l-1.35,-1.6l-0.29,-1.0l0.13,-0.84l1.29,-0.08l1.08,-0.92l3.31,-0.22l2.22,-0.41l0.32,-0.34l0.2,-1.47l1.39,-1.88l-0.01,-5.66l3.36,-1.12l7.24,-5.12l8.42,-4.92l3.69,1.06Z" data-code="NE" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M456.32,253.89l0.64,0.65l-0.28,1.04l-2.11,2.01l-2.03,5.18l-1.37,1.16l-1.15,3.18l-1.33,0.66l-1.46,-0.97l-1.21,0.16l-1.38,1.36l-0.91,0.24l-1.79,4.06l-2.33,0.81l-1.11,-0.07l-0.86,0.5l-1.71,-0.05l-1.19,-1.39l-0.89,-1.89l-1.77,-1.66l-3.95,-0.08l0.07,-5.21l0.42,-1.43l1.95,-2.3l-0.14,-0.91l0.43,-1.18l-0.53,-1.41l0.25,-2.92l0.72,-1.07l0.32,-1.34l0.46,-0.39l2.47,-0.28l2.34,0.89l1.15,1.02l1.28,0.04l1.22,-0.58l3.03,1.27l1.49,-0.14l1.36,-1.0l1.33,0.07l0.82,-0.35l3.45,0.8l1.82,-1.32l1.84,2.67l0.66,0.16Z" data-code="NG" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M857.8,379.65l1.86,3.12l0.44,0.18l0.3,-0.38l0.03,-1.23l0.38,0.27l0.57,2.31l2.02,0.94l1.81,0.27l1.57,-1.06l0.7,0.18l-1.15,3.59l-1.98,0.11l-0.74,1.2l0.2,1.11l-2.42,3.98l-1.49,0.92l-1.04,-0.85l1.21,-2.05l-0.81,-2.01l-2.63,-1.25l0.04,-0.57l1.82,-1.19l0.43,-2.34l-0.16,-2.03l-0.95,-1.82l-0.06,-0.72l-3.11,-3.64l-0.79,-1.52l1.56,1.45l1.76,0.66l0.65,2.34ZM853.83,393.59l0.57,1.24l0.59,0.16l1.42,-0.97l0.46,0.79l0.0,1.03l-2.47,3.48l-1.26,1.2l-0.06,0.5l0.55,0.87l-1.41,0.07l-2.33,1.38l-2.03,5.02l-3.02,2.16l-2.06,-0.06l-1.71,-1.04l-2.47,-0.2l-0.27,-0.73l1.22,-2.1l3.05,-2.94l1.62,-0.59l4.02,-2.82l1.57,-1.67l1.07,-2.16l0.88,-0.7l0.48,-1.75l1.24,-0.97l0.35,0.79Z" data-code="NZ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M641.14,213.62l0.01,3.19l-1.74,0.04l-4.8,-0.86l-1.58,-1.39l-3.37,-0.34l-7.65,-3.7l0.8,-2.09l2.33,-1.7l1.77,0.75l2.49,1.76l1.38,0.41l0.99,1.35l1.9,0.52l1.99,1.17l5.49,0.9Z" data-code="NP" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M407.4,259.27l0.86,0.42l0.56,0.9l1.13,0.53l1.19,-0.61l0.97,-0.08l1.42,0.54l0.6,3.24l-1.03,2.08l-0.65,2.84l1.06,2.33l-0.06,0.53l-2.54,-0.47l-1.66,0.03l-3.06,0.46l-4.11,1.6l0.32,-3.06l-1.18,-1.31l-1.32,-0.66l0.42,-0.85l-0.2,-1.4l0.5,-0.67l0.01,-1.59l0.84,-0.32l0.26,-0.5l-1.15,-3.01l0.12,-0.5l0.51,-0.25l0.66,0.31l1.93,0.02l0.67,-0.71l0.71,-0.14l0.25,0.69l0.57,0.22l1.4,-0.61Z" data-code="CI" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M444.62,156.35l-0.29,0.87l0.18,0.53l1.13,0.58l1.0,0.1l-0.1,0.65l-0.79,0.38l-1.72,-0.37l-0.45,0.23l-0.45,1.04l-0.75,0.06l-0.84,-0.4l-1.32,1.0l-0.96,0.12l-0.88,-0.55l-0.81,-1.3l-0.49,-0.16l-0.63,0.26l0.02,-0.65l1.71,-1.66l0.1,-0.56l0.93,0.08l0.58,-0.46l1.99,0.02l0.66,-0.61l2.19,0.79Z" data-code="CH" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M242.07,254.93l-1.7,0.59l-0.59,1.18l-1.7,1.69l-0.38,1.93l-0.67,1.43l0.31,0.57l1.03,0.13l0.25,0.9l0.57,0.64l-0.04,2.34l1.64,1.42l3.16,-0.24l1.26,0.28l1.67,2.06l0.41,0.13l4.09,-0.39l0.45,0.22l-0.92,1.95l-0.2,1.8l0.52,1.83l0.75,1.05l-1.12,1.1l0.07,0.63l0.84,0.51l0.74,1.29l-0.39,-0.45l-0.59,-0.01l-0.71,0.74l-4.71,-0.05l-0.4,0.41l0.03,1.57l0.33,0.39l1.11,0.2l-1.68,0.4l-0.29,0.38l-0.01,1.82l1.16,1.14l0.34,1.25l-1.05,7.05l-1.04,-0.87l1.26,-1.99l-0.13,-0.56l-2.18,-1.23l-1.38,0.2l-1.14,-0.38l-1.27,0.61l-1.55,-0.26l-1.38,-2.46l-1.23,-0.75l-0.85,-1.2l-1.67,-1.19l-0.86,0.13l-2.11,-1.32l-1.01,0.31l-1.8,-0.29l-0.52,-0.91l-3.09,-1.68l0.77,-0.52l-0.1,-1.12l0.41,-0.64l1.34,-0.32l2.0,-2.88l-0.11,-0.57l-0.66,-0.43l0.39,-1.38l-0.52,-2.1l0.49,-0.83l-0.4,-2.13l-0.97,-1.35l0.17,-0.66l0.86,-0.08l0.47,-0.75l-0.46,-1.63l1.41,-0.07l1.8,-1.69l0.93,-0.24l0.3,-0.38l0.45,-2.76l1.22,-1.0l1.44,-0.04l0.45,-0.5l1.91,0.12l2.93,-1.84l1.15,-1.14l0.91,0.46l-0.25,0.45Z" data-code="CO" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M740.23,148.97l4.57,1.3l2.8,2.17l0.98,2.9l0.38,0.27l3.8,0.0l2.32,-1.28l3.29,-0.75l-0.96,2.09l-1.02,1.28l-0.85,3.4l-1.52,2.73l-2.76,-0.5l-2.4,1.13l-0.21,0.45l0.64,2.57l-0.32,3.2l-0.94,0.06l-0.37,0.89l-0.91,-1.01l-0.64,0.07l-0.92,1.57l-3.73,1.25l-0.26,0.48l0.26,1.06l-1.5,-0.08l-1.09,-0.86l-0.56,0.06l-1.67,2.06l-2.7,1.56l-2.03,1.88l-3.4,0.83l-1.93,1.4l-1.15,0.34l0.33,-0.7l-0.41,-0.89l1.79,-1.79l0.02,-0.54l-1.32,-1.56l-0.48,-0.1l-2.24,1.09l-2.83,2.06l-1.51,1.83l-2.28,0.13l-1.55,1.49l-0.04,0.5l1.32,1.97l2.0,0.58l0.31,1.35l1.98,0.84l3.0,-1.96l2.0,1.02l1.49,0.11l0.22,0.83l-3.37,0.86l-1.12,1.48l-2.5,1.52l-1.29,1.99l0.14,0.56l2.57,1.48l0.97,2.7l3.17,4.63l-0.03,1.66l-1.35,0.65l-0.2,0.51l0.6,1.47l1.4,0.91l-0.89,3.82l-1.43,0.38l-3.85,6.44l-2.27,3.11l-6.78,4.57l-2.73,0.29l-1.45,1.04l-0.62,-0.61l-0.55,-0.01l-1.36,1.25l-3.39,1.27l-2.61,0.4l-1.1,2.79l-0.81,0.09l-0.49,-1.42l0.5,-0.85l-0.25,-0.59l-3.36,-0.84l-1.3,0.4l-2.31,-0.62l-0.94,-0.84l0.33,-1.28l-0.3,-0.49l-2.19,-0.46l-1.13,-0.93l-0.47,-0.02l-2.06,1.36l-4.29,0.28l-2.76,1.05l-0.28,0.43l0.32,2.53l-0.59,-0.03l-0.19,-1.34l-0.55,-0.34l-1.68,0.7l-2.46,-1.23l0.62,-1.87l-0.26,-0.51l-1.37,-0.44l-0.54,-2.22l-0.45,-0.3l-2.13,0.35l0.24,-2.48l2.39,-2.4l0.03,-4.31l-1.19,-0.92l-0.78,-1.49l-0.41,-0.21l-1.41,0.19l-1.98,-0.3l0.46,-1.07l-1.17,-1.7l-0.55,-0.11l-1.63,1.05l-2.25,-0.57l-2.89,1.73l-2.25,1.98l-1.75,0.29l-1.17,-0.71l-3.31,-0.65l-1.48,0.79l-1.04,1.27l-0.12,-1.17l-0.54,-0.34l-1.44,0.54l-5.55,-0.86l-1.98,-1.16l-1.89,-0.54l-0.99,-1.35l-1.34,-0.37l-2.55,-1.79l-2.01,-0.84l-1.21,0.56l-5.57,-3.45l-0.53,-2.31l1.19,0.25l0.48,-0.37l0.08,-1.42l-0.98,-1.56l0.15,-2.44l-2.69,-3.32l-4.12,-1.23l-0.67,-2.0l-1.92,-1.48l-0.38,-0.7l-0.51,-3.01l-1.52,-0.66l-0.7,0.13l-0.48,-2.05l0.55,-0.51l-0.09,-0.82l2.03,-1.19l1.6,-0.54l2.56,0.38l0.42,-0.22l0.85,-1.7l3.0,-0.33l1.1,-1.26l4.05,-1.77l0.39,-0.91l-0.17,-1.44l1.45,-0.67l0.2,-0.52l-2.07,-4.9l4.51,-1.12l1.37,-0.73l1.89,-5.51l4.98,0.86l1.51,-1.7l0.11,-2.87l1.99,-0.38l1.83,-2.06l0.49,-0.13l0.68,2.08l2.23,1.77l3.44,1.16l1.55,2.29l-0.92,3.49l0.96,1.67l6.54,1.13l2.95,1.87l1.47,0.35l1.06,2.62l1.53,1.91l3.05,0.08l5.14,0.67l3.37,-0.41l2.36,0.43l3.65,1.8l3.06,0.04l1.45,0.88l2.87,-1.59l3.95,-1.02l3.83,-0.14l3.06,-1.14l1.77,-1.6l1.72,-1.01l0.17,-0.49l-1.1,-2.05l1.02,-1.54l4.02,0.8l2.45,-1.61l3.76,-1.19l1.96,-2.13l1.63,-0.83l3.51,-0.4l1.92,0.34l0.46,-0.3l0.17,-1.5l-2.27,-2.22l-2.11,-1.09l-2.18,1.11l-2.32,-0.47l-1.29,0.32l-0.4,-0.82l2.73,-5.16l3.02,1.06l3.53,-2.06l0.18,-1.68l2.16,-3.35l1.49,-1.35l-0.03,-1.85l-1.07,-0.85l1.54,-1.26l2.98,-0.59l3.23,-0.09l3.64,0.99l2.04,1.16l3.29,6.71l0.92,3.19ZM696.92,237.31l-1.87,1.08l-1.63,-0.64l-0.06,-1.79l1.03,-0.98l2.58,-0.69l1.16,0.05l0.3,0.54l-0.98,1.06l-0.53,1.37Z" data-code="CN" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M457.92,257.49l1.05,1.91l-1.4,0.16l-1.05,-0.23l-0.45,0.22l-0.54,1.19l0.08,0.45l1.48,1.47l1.05,0.45l1.01,2.46l-1.52,2.99l-0.68,0.68l-0.13,3.69l2.38,3.84l1.09,0.8l0.24,2.48l-3.67,-1.14l-11.27,-0.13l0.23,-1.79l-0.98,-1.66l-1.19,-0.54l-0.44,-0.97l-0.6,-0.42l1.71,-4.27l0.75,-0.13l1.38,-1.36l0.65,-0.03l1.71,0.99l1.93,-1.12l1.14,-3.18l1.38,-1.17l2.0,-5.14l2.17,-2.13l0.3,-1.64l-0.86,-0.88l0.03,-0.33l0.94,1.28l0.07,3.22Z" data-code="CM" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M246.5,429.18l-3.14,1.83l-0.57,3.16l-0.64,0.05l-2.68,-1.06l-2.82,-2.33l-3.04,-1.89l-0.69,-1.85l0.63,-2.14l-1.21,-2.11l-0.31,-5.37l1.01,-2.91l2.57,-2.38l-0.18,-0.68l-3.16,-0.77l2.05,-2.47l0.77,-4.65l2.32,0.9l0.54,-0.29l1.31,-6.31l-0.22,-0.44l-1.68,-0.8l-0.56,0.28l-0.7,3.36l-0.81,-0.22l1.56,-9.41l1.15,-2.24l-0.71,-2.82l-0.18,-2.84l1.01,-0.33l3.26,-9.14l1.07,-4.22l-0.56,-4.21l0.74,-2.34l-0.29,-3.27l1.46,-3.34l2.04,-16.59l-0.66,-7.76l1.03,-0.53l0.54,-0.9l0.79,1.14l0.32,1.78l1.25,1.16l-0.69,2.55l1.33,2.9l0.97,3.59l0.46,0.29l1.5,-0.3l0.11,0.23l-0.76,2.44l-2.57,1.23l-0.23,0.37l0.08,4.33l-0.46,0.77l0.56,1.21l-1.58,1.51l-1.68,2.62l-0.89,2.47l0.2,2.7l-1.48,2.73l1.12,5.09l0.64,0.61l-0.01,2.29l-1.38,2.68l0.01,2.4l-1.89,2.04l0.02,2.75l0.69,2.57l-1.43,1.13l-1.26,5.68l0.39,3.51l-0.97,0.89l0.58,3.5l1.02,1.14l-0.65,1.02l0.15,0.57l1.0,0.53l0.16,0.69l-1.03,0.85l0.26,1.75l-0.89,4.03l-1.31,2.66l0.24,1.75l-0.71,1.83l-1.99,1.7l0.3,3.67l0.88,1.19l1.58,0.01l0.01,2.21l1.04,1.95l5.98,0.63ZM248.69,430.79l0.0,7.33l0.4,0.4l3.52,0.05l-0.44,0.75l-1.94,0.98l-2.49,-0.37l-1.88,-1.06l-2.55,-0.49l-5.59,-3.71l-2.38,-2.63l4.1,2.48l3.32,1.23l0.45,-0.12l1.29,-1.57l0.83,-2.32l2.05,-1.24l1.31,0.29Z" data-code="CL" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M280.06,145.6l-1.67,2.88l0.07,0.49l0.5,0.04l1.46,-0.98l1.0,0.42l-0.56,0.72l0.17,0.62l2.22,0.89l1.35,-0.71l1.95,0.78l-0.66,2.01l0.5,0.51l1.32,-0.42l0.98,3.17l-0.91,2.41l-0.8,0.08l-1.23,-0.45l0.47,-2.25l-0.89,-0.83l-0.48,0.06l-2.78,2.63l-0.34,-0.02l1.02,-0.85l-0.14,-0.69l-2.4,-0.77l-7.4,0.08l-0.17,-0.41l1.3,-0.94l0.02,-0.64l-0.73,-0.58l1.85,-1.74l2.57,-5.16l1.47,-1.79l1.99,-1.05l0.46,0.06l-1.53,2.45ZM68.32,74.16l4.13,0.95l4.02,2.14l2.61,0.4l2.47,-1.89l2.88,-1.31l3.85,0.48l3.71,-1.94l3.82,-1.04l1.56,1.68l0.49,0.08l1.87,-1.04l0.65,-1.98l1.24,0.35l4.16,3.94l0.54,0.01l2.75,-2.49l0.26,2.59l0.49,0.35l3.08,-0.73l1.04,-1.27l2.73,0.23l3.83,1.86l5.86,1.61l3.47,0.75l2.44,-0.26l2.73,1.78l-2.98,1.81l-0.19,0.41l0.31,0.32l4.53,0.92l6.87,-0.5l2.0,-0.69l2.49,2.39l0.53,0.02l2.72,-2.16l-0.02,-0.64l-2.16,-1.54l1.15,-1.06l4.83,-0.61l1.84,0.95l2.48,2.31l3.01,-0.23l4.55,1.92l3.85,-0.67l3.61,0.1l0.41,-0.44l-0.25,-2.36l1.79,-0.61l3.49,1.32l-0.01,3.77l0.31,0.39l0.45,-0.22l1.48,-3.16l1.74,0.1l0.41,-0.3l1.13,-4.37l-2.78,-3.11l-2.8,-1.74l0.19,-4.64l2.71,-3.07l2.98,0.67l2.41,1.95l3.19,4.8l-1.99,1.97l0.21,0.68l4.33,0.84l-0.01,4.15l0.25,0.37l0.44,-0.09l3.07,-3.15l2.54,2.39l-0.61,3.33l2.42,2.88l0.61,0.0l2.61,-3.08l1.88,-3.82l0.17,-4.58l6.72,0.94l3.13,2.04l0.13,1.82l-1.76,2.19l-0.01,0.49l1.66,2.16l-0.26,1.71l-4.68,2.8l-3.28,0.61l-2.47,-1.2l-0.55,0.23l-0.73,2.04l-2.38,3.43l-0.74,1.77l-2.74,2.57l-3.44,0.25l-2.21,1.78l-0.28,2.53l-2.82,0.55l-3.12,3.22l-2.72,4.31l-1.03,3.17l-0.14,4.31l0.33,0.41l3.44,0.57l2.24,5.95l0.45,0.23l3.4,-0.69l4.52,1.51l2.43,1.31l1.91,1.73l3.1,0.96l2.62,1.46l6.6,0.54l-0.35,2.74l0.81,3.53l1.81,3.78l3.83,3.3l0.45,0.04l2.1,-1.28l1.37,-3.69l-1.31,-5.38l-1.45,-1.58l3.57,-1.47l2.84,-2.46l1.52,-2.8l-0.25,-2.55l-1.7,-3.07l-2.85,-2.61l2.8,-3.95l-1.08,-3.37l-0.79,-5.67l1.36,-0.7l6.76,1.41l2.12,-0.96l5.12,3.36l1.05,1.61l4.08,0.26l-0.06,2.87l0.83,4.7l0.3,0.32l2.16,0.54l1.73,2.06l0.5,0.09l3.63,-2.03l2.52,-4.19l1.26,-1.32l7.6,11.72l-0.92,2.04l0.16,0.51l3.3,1.97l2.22,1.98l4.1,0.98l1.43,0.99l0.95,2.79l2.1,0.68l0.84,1.08l0.17,3.45l-3.37,2.26l-4.22,1.24l-3.06,2.63l-4.06,0.51l-5.35,-0.69l-6.39,0.2l-2.3,2.41l-3.26,1.51l-6.47,7.15l-0.06,0.48l0.44,0.19l2.13,-0.52l4.17,-4.24l5.12,-2.62l3.52,-0.3l1.69,1.21l-2.12,2.21l0.81,3.47l1.02,2.61l3.47,1.6l4.14,-0.45l2.15,-2.8l0.26,1.48l1.14,0.8l-2.56,1.69l-5.5,1.82l-2.54,1.27l-2.74,2.15l-1.4,-0.16l-0.07,-2.01l4.14,-2.44l0.18,-0.45l-0.39,-0.29l-6.63,0.45l-1.39,-1.49l-0.14,-4.43l-1.11,-0.91l-1.82,0.39l-0.66,-0.66l-0.6,0.03l-1.91,2.39l-0.82,2.52l-0.8,1.27l-1.67,0.56l-0.46,0.76l-8.31,0.07l-1.21,0.62l-2.35,1.97l-0.71,-0.14l-1.37,0.96l-1.12,-0.48l-4.74,1.26l-0.9,1.17l0.21,0.62l1.73,0.3l-1.81,0.31l-1.85,0.81l-2.11,-0.13l-2.95,1.78l-0.69,-0.09l1.39,-2.1l1.73,-1.21l0.1,-2.29l1.16,-1.99l0.49,0.53l2.03,0.42l1.2,-1.16l0.02,-0.47l-2.66,-3.51l-2.28,-0.61l-5.64,-0.71l-0.4,-0.57l-0.79,0.13l0.2,-0.41l-0.22,-0.55l-0.68,-0.26l0.19,-1.26l-0.78,-0.73l0.31,-0.64l-0.29,-0.57l-2.6,-0.44l-0.75,-1.63l-0.94,-0.66l-4.31,-0.65l-1.13,1.19l-1.48,0.59l-0.85,1.06l-2.83,-0.76l-2.09,0.39l-2.39,-0.97l-4.24,-0.7l-0.57,-0.4l-0.41,-1.63l-0.4,-0.3l-0.85,0.02l-0.39,0.4l-0.01,0.85l-69.13,-0.01l-6.51,-4.52l-4.5,-1.38l-1.26,-2.66l0.33,-1.93l-0.23,-0.43l-3.01,-1.35l-0.55,-2.77l-2.89,-2.38l-0.04,-1.45l1.39,-1.83l-0.28,-2.55l-4.16,-2.2l-4.07,-6.6l-4.02,-3.22l-1.3,-1.88l-0.5,-0.13l-2.51,1.21l-2.23,1.87l-3.85,-3.88l-2.44,-1.04l-2.22,-0.13l0.03,-37.49ZM260.37,148.65l3.04,0.76l2.26,1.2l-3.78,-0.95l-1.53,-1.01ZM249.4,3.81l6.68,0.49l5.32,0.79l4.26,1.57l-0.07,1.1l-5.85,2.53l-6.02,1.21l-2.39,1.39l-0.18,0.45l0.39,0.29l4.01,-0.02l-4.65,2.82l-4.2,1.74l-4.19,4.59l-5.03,0.92l-1.67,1.15l-7.47,0.59l-0.37,0.37l0.32,0.42l2.41,0.49l-0.81,0.47l-0.12,0.59l1.83,2.41l-2.02,1.59l-3.81,1.51l-1.32,2.16l-3.38,1.53l-0.22,0.48l0.35,1.19l0.4,0.29l3.88,-0.18l0.03,0.61l-6.33,2.95l-6.41,-1.4l-7.43,0.79l-3.72,-0.62l-4.4,-0.25l-0.23,-1.83l4.29,-1.11l0.28,-0.51l-1.1,-3.45l1.0,-0.25l6.58,2.28l0.47,-0.16l-0.05,-0.49l-3.41,-3.45l-3.58,-0.98l1.48,-1.55l4.34,-1.29l0.97,-2.19l-0.16,-0.48l-3.42,-2.13l-0.81,-2.26l6.2,0.22l2.24,0.58l3.91,-2.1l0.2,-0.43l-0.35,-0.32l-5.64,-0.67l-8.73,0.36l-4.26,-1.9l-2.12,-2.4l-2.78,-1.66l-0.41,-1.52l3.31,-1.03l2.93,-0.2l4.91,-0.99l3.7,-2.27l2.87,0.3l2.62,1.67l0.56,-0.14l1.82,-3.2l3.13,-0.94l4.44,-0.69l7.53,-0.26l1.48,0.67l7.19,-1.06l10.8,0.79ZM203.85,57.54l0.01,0.42l1.97,2.97l0.68,-0.02l2.24,-3.72l5.95,-1.86l4.01,4.64l-0.35,2.91l0.5,0.43l4.95,-1.36l2.32,-1.8l5.31,2.28l3.27,2.11l0.3,1.84l0.48,0.33l4.42,-0.99l2.64,2.87l5.97,1.77l2.06,1.72l2.11,3.71l-4.19,1.86l-0.01,0.73l5.9,2.83l3.94,0.94l3.78,3.95l3.46,0.25l-0.63,2.37l-4.11,4.47l-2.76,-1.56l-3.9,-3.94l-3.59,0.41l-0.33,0.34l-0.19,2.72l2.63,2.38l3.42,1.89l0.94,0.97l1.55,3.75l-0.7,2.29l-2.74,-0.92l-6.25,-3.15l-0.51,0.13l0.05,0.52l6.07,5.69l0.18,0.59l-6.09,-1.39l-5.31,-2.24l-2.63,-1.66l0.6,-0.77l-0.12,-0.6l-7.39,-4.01l-0.59,0.37l0.03,0.79l-6.73,0.6l-1.69,-1.1l1.36,-2.46l4.51,-0.07l5.15,-0.52l0.31,-0.6l-0.74,-1.3l0.78,-1.84l3.21,-4.05l-0.67,-2.35l-1.11,-1.6l-3.84,-2.1l-4.35,-1.28l0.91,-0.63l0.06,-0.61l-2.65,-2.75l-2.34,-0.36l-1.89,-1.46l-0.53,0.03l-1.24,1.23l-4.36,0.55l-9.04,-0.99l-9.26,-1.98l-1.6,-1.22l2.22,-1.77l0.13,-0.44l-0.38,-0.27l-3.22,-0.02l-0.72,-4.25l1.83,-4.04l2.42,-1.85l5.5,-1.1l-1.39,2.35ZM261.19,159.33l2.07,0.61l1.44,-0.04l-1.15,0.63l-2.94,-1.23l-0.4,-0.68l0.36,-0.37l0.61,1.07ZM230.83,84.39l-2.37,0.18l-0.49,-1.63l0.93,-2.09l1.94,-0.51l1.62,0.99l0.02,1.52l-1.66,1.54ZM229.43,58.25l0.11,0.65l-4.87,-0.21l-2.72,0.62l-3.1,-2.57l0.08,-1.26l0.86,-0.23l5.57,0.51l4.08,2.5ZM222.0,105.02l-0.72,1.49l-0.63,-0.19l-0.48,-0.84l0.81,-0.99l0.65,0.05l0.37,0.46ZM183.74,38.32l2.9,1.7l4.79,-0.01l1.84,1.46l-0.49,1.68l0.23,0.48l2.82,1.14l1.76,1.26l7.01,0.65l4.1,-1.1l5.03,-0.43l3.93,0.35l2.48,1.77l0.46,1.7l-1.3,1.1l-3.56,1.01l-3.23,-0.59l-7.17,0.76l-5.09,0.09l-3.99,-0.6l-6.42,-1.54l-0.79,-2.51l-0.3,-2.49l-2.64,-2.5l-5.32,-0.72l-2.52,-1.4l0.68,-1.57l4.78,0.31ZM207.38,91.35l0.4,1.56l0.56,0.26l1.06,-0.52l1.32,0.96l5.42,2.57l0.2,1.68l0.46,0.35l1.68,-0.28l1.15,0.85l-1.55,0.87l-3.61,-0.88l-1.32,-1.69l-0.57,-0.06l-2.45,2.1l-3.12,1.79l-0.7,-1.87l-0.42,-0.26l-2.16,0.24l1.39,-1.39l0.32,-3.14l0.76,-3.35l1.18,0.22ZM215.49,102.6l-2.67,1.95l-1.4,-0.07l-0.3,-0.58l1.53,-1.48l2.84,0.18ZM202.7,24.12l2.53,1.59l-2.87,1.4l-4.53,4.05l-4.25,0.38l-5.03,-0.68l-2.45,-2.04l0.03,-1.62l1.82,-1.37l0.14,-0.45l-0.38,-0.27l-4.45,0.04l-2.59,-1.76l-1.41,-2.29l1.57,-2.32l1.62,-1.66l2.44,-0.39l0.25,-0.65l-0.6,-0.74l4.86,-0.25l3.24,3.11l8.16,2.3l1.9,3.61ZM187.47,59.2l-2.76,3.49l-2.38,-0.15l-1.44,-3.84l0.04,-2.2l1.19,-1.88l2.3,-1.23l5.07,0.17l4.11,1.02l-3.24,3.72l-2.88,0.89ZM186.07,48.79l-1.08,1.53l-3.34,-0.34l-2.56,-1.1l1.03,-1.75l3.25,-1.23l1.95,1.58l0.75,1.3ZM185.71,35.32l-5.3,-0.2l-0.32,-0.71l4.31,0.07l1.3,0.84ZM180.68,32.48l-3.34,1.0l-1.79,-1.1l-0.98,-1.87l-0.15,-1.73l4.1,0.53l2.67,1.7l-0.51,1.47ZM180.9,76.31l-1.1,1.08l-3.13,-1.23l-2.12,0.43l-2.71,-1.57l1.72,-1.09l1.55,-1.72l3.81,1.9l1.98,2.2ZM169.74,54.87l2.96,0.97l4.17,-0.57l0.41,0.88l-2.14,2.11l0.09,0.64l3.55,1.92l-0.4,3.72l-3.79,1.65l-2.17,-0.35l-1.72,-1.74l-6.02,-3.5l0.03,-0.85l4.68,0.54l0.4,-0.21l-0.05,-0.45l-2.48,-2.81l2.46,-1.95ZM174.45,40.74l1.37,1.73l0.07,2.44l-1.05,3.45l-3.79,0.47l-2.32,-0.69l0.05,-2.64l-0.44,-0.41l-3.68,0.35l-0.12,-3.1l2.45,0.1l3.67,-1.73l3.41,0.29l0.37,-0.26ZM170.05,31.55l0.67,1.56l-3.33,-0.49l-4.22,-1.77l-4.35,-0.16l1.4,-0.94l-0.06,-0.7l-2.81,-1.23l-0.12,-1.39l4.39,0.68l6.62,1.98l1.81,2.47ZM134.5,58.13l-1.02,1.82l0.45,0.58l5.4,-1.39l3.33,2.29l0.49,-0.03l2.6,-2.23l1.94,1.32l2.0,4.5l0.7,0.06l1.3,-2.29l-1.63,-4.46l1.69,-0.54l2.31,0.71l2.65,1.81l2.49,7.92l8.48,4.27l-0.19,1.35l-3.79,0.33l-0.26,0.67l1.4,1.49l-0.58,1.1l-4.23,-0.64l-4.43,-1.19l-3.0,0.28l-4.66,1.47l-10.52,1.04l-1.43,-2.02l-3.42,-1.2l-2.21,0.43l-2.51,-2.86l4.84,-1.05l3.6,0.19l3.27,-0.78l0.31,-0.39l-0.31,-0.39l-4.84,-1.06l-8.79,0.27l-0.85,-1.07l5.26,-1.66l0.27,-0.45l-0.4,-0.34l-3.8,0.06l-3.81,-1.06l1.81,-3.01l1.66,-1.79l6.48,-2.81l1.97,0.71ZM158.7,56.61l-1.7,2.44l-3.2,-2.75l0.37,-0.3l3.11,-0.18l1.42,0.79ZM149.61,42.73l1.01,1.89l0.5,0.18l2.14,-0.82l2.23,0.19l0.36,2.04l-1.33,2.09l-8.28,0.76l-6.35,2.15l-3.41,0.1l-0.19,-0.96l4.9,-2.08l0.23,-0.46l-0.41,-0.31l-11.25,0.59l-2.89,-0.74l3.04,-4.44l2.14,-1.32l6.81,1.69l4.58,3.06l4.37,0.39l0.36,-0.63l-3.36,-4.6l1.85,-1.53l2.18,0.51l0.77,2.26ZM144.76,34.41l-4.36,1.44l-3.0,-1.4l1.46,-1.24l3.47,-0.52l2.96,0.71l-0.52,1.01ZM145.13,29.83l-1.9,0.66l-3.67,-0.0l2.27,-1.61l3.3,0.95ZM118.92,65.79l-6.03,2.02l-1.33,-1.9l-5.38,-2.28l2.59,-5.05l2.16,-3.14l-0.02,-0.48l-1.97,-2.41l7.64,-0.7l3.6,1.02l6.3,0.27l4.42,2.95l-2.53,0.98l-6.24,3.43l-3.1,3.28l-0.11,2.01ZM129.54,35.53l-0.28,3.37l-1.72,1.62l-2.33,0.28l-4.61,2.19l-3.86,0.76l-2.64,-0.87l3.72,-3.4l5.01,-3.34l3.72,0.07l3.0,-0.67ZM111.09,152.69l-0.67,0.24l-3.85,-1.37l-0.83,-1.17l-2.12,-1.07l-0.66,-1.02l-2.4,-0.55l-0.74,-1.71l6.02,1.45l2.0,2.55l2.52,1.39l0.73,1.27ZM87.8,134.64l0.89,0.29l1.86,-0.21l-0.65,3.34l1.69,2.33l-1.31,-1.33l-0.99,-1.62l-1.17,-0.98l-0.33,-1.82Z" data-code="CA" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M466.72,276.48l-0.1,1.03l-1.25,2.97l-0.19,3.62l-0.46,1.78l-0.23,0.63l-1.61,1.19l-1.21,1.39l-1.09,2.43l0.04,2.09l-3.25,3.24l-0.5,-0.24l-0.5,-0.83l-1.36,-0.02l-0.98,0.89l-1.68,-0.99l-1.54,1.24l-1.52,-1.96l1.57,-1.14l0.11,-0.52l-0.77,-1.35l2.1,-0.66l0.39,-0.73l1.05,0.82l2.21,0.11l1.12,-1.37l0.37,-1.81l-0.27,-2.09l-1.13,-1.5l1.0,-2.69l-0.13,-0.45l-0.92,-0.58l-1.6,0.17l-0.51,-0.94l0.1,-0.61l2.75,0.09l3.97,1.24l0.51,-0.33l0.17,-1.28l1.24,-2.21l1.28,-1.14l2.76,0.49Z" data-code="CG" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M461.16,278.2l-0.26,-1.19l-1.09,-0.77l-0.84,-1.17l-0.29,-1.0l-1.04,-1.15l0.08,-3.43l0.58,-0.49l1.16,-2.35l1.85,-0.17l0.61,-0.62l0.97,0.58l3.15,-0.96l2.48,-1.92l0.02,-0.96l2.81,0.02l2.36,-1.17l1.93,-2.85l1.16,-0.93l1.11,-0.3l0.27,0.86l1.34,1.47l-0.39,2.01l0.3,1.01l4.01,2.75l0.17,0.93l2.63,2.31l0.6,1.44l2.08,1.4l-3.84,-0.21l-1.94,0.88l-1.23,-0.49l-2.67,1.2l-1.29,-0.18l-0.51,0.36l-0.6,1.22l-3.35,-0.65l-1.57,-0.91l-2.42,-0.83l-1.45,0.91l-0.97,1.27l-0.26,1.56l-3.22,-0.43l-1.49,1.33l-0.94,1.62Z" data-code="CF" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M487.01,272.38l2.34,-0.14l1.35,1.84l1.34,0.45l0.86,-0.39l1.21,0.12l1.07,-0.41l0.54,0.89l2.04,1.54l-0.14,2.72l0.7,0.54l-1.38,1.13l-1.53,2.54l-0.17,2.05l-0.59,1.08l-0.02,1.72l-0.72,0.84l-0.66,3.01l0.63,1.32l-0.44,4.26l0.64,1.47l-0.37,1.22l0.86,1.8l1.53,1.41l0.3,1.26l0.44,0.5l-4.08,0.75l-0.92,1.81l0.51,1.34l-0.74,5.43l0.17,0.38l2.45,1.46l0.54,-0.1l0.12,1.62l-1.28,-0.01l-1.85,-2.35l-1.94,-0.45l-0.48,-1.13l-0.55,-0.2l-1.41,0.74l-1.71,-0.3l-1.01,-1.18l-2.49,-0.19l-0.44,-0.77l-1.98,-0.21l-2.88,0.36l0.11,-2.41l-0.85,-1.13l-0.16,-1.36l0.32,-1.73l-0.46,-0.89l-0.04,-1.49l-0.4,-0.39l-2.53,0.02l0.1,-0.41l-0.39,-0.49l-1.28,0.01l-0.43,0.45l-1.62,0.32l-0.83,1.79l-1.09,-0.28l-2.4,0.52l-1.37,-1.91l-1.3,-3.3l-0.38,-0.27l-7.39,-0.03l-2.46,0.42l0.5,-0.45l0.37,-1.47l0.66,-0.38l0.92,0.08l0.73,-0.82l0.87,0.02l0.31,0.68l1.4,0.36l3.59,-3.63l0.01,-2.23l1.02,-2.29l2.69,-2.39l0.43,-0.99l0.49,-1.96l0.17,-3.51l1.25,-2.95l0.36,-3.14l0.86,-1.13l1.1,-0.66l3.57,1.73l3.65,0.73l0.46,-0.21l0.8,-1.46l1.24,0.19l2.61,-1.17l0.81,0.44l1.04,-0.03l0.59,-0.66l0.7,-0.16l1.81,0.25Z" data-code="CD" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M458.46,144.88l1.22,1.01l1.47,0.23l0.13,0.93l1.36,0.68l0.54,-0.2l0.24,-0.55l1.15,0.25l0.53,1.09l1.68,0.18l0.6,0.84l-1.04,0.73l-0.96,1.28l-1.6,0.17l-0.55,0.56l-1.04,-0.46l-1.05,0.15l-2.12,-0.96l-1.05,0.34l-1.2,1.12l-1.56,-0.87l-2.57,-2.1l-0.53,-1.88l4.7,-2.52l0.71,0.26l0.9,-0.28Z" data-code="CZ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M504.36,193.47l0.43,0.28l-1.28,0.57l-0.92,-0.28l-0.24,-0.46l2.01,-0.13Z" data-code="CY" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M211.34,258.05l0.48,0.99l1.6,1.6l-0.54,0.45l0.29,1.42l-0.25,1.19l-1.09,-0.59l-0.05,-1.25l-2.46,-1.42l-0.28,-0.77l-0.66,-0.45l-0.45,-0.0l-0.11,1.04l-1.32,-0.95l0.31,-1.3l-0.36,-0.6l0.31,-0.27l1.42,0.58l1.29,-0.14l0.56,0.56l0.74,0.17l0.55,-0.27Z" data-code="CR" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M221.21,227.25l1.27,1.02l2.19,-0.28l4.43,3.33l2.08,0.43l-0.1,0.38l0.36,0.5l1.75,0.1l1.48,0.84l-3.11,0.51l-4.15,-0.03l0.77,-0.67l-0.04,-0.64l-1.2,-0.74l-1.49,-0.16l-0.7,-0.61l-0.56,-1.4l-0.4,-0.25l-1.34,0.1l-2.2,-0.66l-0.88,-0.58l-3.18,-0.4l-0.27,-0.16l0.58,-0.74l-0.36,-0.29l-2.72,-0.05l-1.7,1.29l-0.91,0.03l-0.61,0.69l-1.01,0.22l1.11,-1.29l1.01,-0.52l3.69,-1.01l3.98,0.21l2.21,0.84Z" data-code="CU" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M500.35,351.36l0.5,2.04l-0.38,0.89l-1.05,0.21l-1.23,-1.2l-0.02,-0.64l0.83,-1.57l1.34,0.27Z" data-code="SZ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M511.0,199.79l0.05,-1.33l0.54,-1.36l1.28,-0.99l0.13,-0.45l-0.41,-1.11l-1.14,-0.36l-0.19,-1.74l0.52,-1.0l1.29,-1.21l0.2,-1.18l0.59,0.23l2.62,-0.76l1.36,0.52l2.06,-0.01l2.95,-1.08l3.25,-0.26l-0.67,0.94l-1.28,0.66l-0.21,0.4l0.23,2.01l-0.88,3.19l-10.15,5.73l-2.15,-0.85Z" data-code="SY" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M621.35,172.32l-3.87,1.69l-0.96,1.18l-3.04,0.34l-1.13,1.86l-2.36,-0.35l-1.99,0.63l-2.39,1.4l0.06,0.95l-0.4,0.37l-4.52,0.43l-3.02,-0.93l-2.37,0.17l0.11,-0.79l2.32,0.42l1.13,-0.88l1.99,0.2l3.21,-2.14l-0.03,-0.69l-2.97,-1.57l-1.94,0.65l-1.22,-0.74l1.71,-1.58l-0.12,-0.67l-0.36,-0.15l0.32,-0.77l1.36,-0.35l4.02,1.02l0.49,-0.3l0.35,-1.59l1.09,-0.48l3.42,1.22l1.11,-0.31l7.64,0.39l1.16,1.0l1.23,0.39Z" data-code="KG" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M506.26,284.69l1.87,-2.56l0.93,-2.15l-1.38,-4.08l-1.06,-1.6l2.82,-2.75l0.79,0.26l0.12,1.41l0.86,0.83l1.9,0.11l3.28,2.13l3.57,0.44l1.05,-1.12l1.96,-0.9l0.82,0.68l1.16,0.09l-1.78,2.45l0.03,9.12l1.3,1.94l-1.37,0.78l-0.67,1.03l-1.08,0.46l-0.34,1.67l-0.81,1.07l-0.45,1.55l-0.68,0.56l-3.2,-2.23l-0.35,-1.58l-8.86,-4.98l0.14,-1.6l-0.57,-1.04Z" data-code="KE" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M481.71,263.34l1.07,-0.72l1.2,-3.18l1.36,-0.26l1.61,1.99l0.87,0.34l1.1,-0.41l1.5,0.07l0.57,0.53l2.49,0.0l0.44,-0.63l1.07,-0.4l0.45,-0.84l0.59,-0.33l1.9,1.33l1.6,-0.2l2.83,-3.33l-0.32,-2.21l1.59,-0.52l-0.24,1.6l0.3,1.83l1.35,1.18l0.2,1.87l0.35,0.41l0.02,1.53l-0.23,0.47l-1.42,0.25l-0.85,1.44l0.3,0.6l1.4,0.16l1.11,1.08l0.59,1.13l1.03,0.53l1.28,2.36l-4.41,3.98l-1.74,0.01l-1.89,0.55l-1.47,-0.52l-1.15,0.57l-2.96,-2.62l-1.3,0.49l-1.06,-0.15l-0.79,0.39l-0.82,-0.22l-1.8,-2.7l-1.91,-1.1l-0.66,-1.5l-2.62,-2.32l-0.18,-0.94l-2.37,-1.6Z" data-code="SS" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M283.12,270.19l2.1,0.53l-1.08,1.95l0.2,1.72l0.93,1.49l-0.59,2.03l-0.43,0.71l-1.12,-0.42l-1.32,0.22l-0.93,-0.2l-0.46,0.26l-0.25,0.73l0.33,0.7l-0.89,-0.13l-1.39,-1.97l-0.31,-1.34l-0.97,-0.31l-0.89,-1.47l0.35,-1.61l1.45,-0.82l0.33,-1.87l2.61,0.44l0.57,-0.47l1.75,-0.16Z" data-code="SR" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M689.52,249.39l0.49,1.45l-0.28,2.74l-4.0,1.86l-0.16,0.6l0.68,0.95l-2.06,0.17l-2.05,0.97l-1.82,-0.32l-2.12,-3.7l-0.55,-2.85l1.4,-1.85l3.02,-0.45l2.23,0.35l2.01,0.98l0.51,-0.14l0.95,-1.48l1.74,0.74Z" data-code="KH" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M195.8,250.13l1.4,-1.19l2.24,1.45l0.98,-0.27l0.44,0.2l-0.27,1.05l-1.14,-0.03l-3.64,-1.21Z" data-code="SV" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M476.82,151.17l-1.14,1.9l-2.73,-0.92l-0.82,0.2l-0.74,0.8l-3.46,0.73l-0.47,0.69l-1.76,0.33l-1.88,-1.0l-0.18,-0.81l0.38,-0.75l1.87,-0.32l1.74,-1.89l0.83,0.16l0.79,-0.34l1.51,1.04l1.34,-0.63l1.25,0.3l1.65,-0.42l1.81,0.95Z" data-code="SK" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M737.51,185.84l0.98,-0.1l0.87,-1.17l2.69,-0.32l0.33,-0.29l1.76,2.79l0.58,1.76l0.02,3.12l-0.8,1.32l-2.21,0.55l-1.93,1.13l-1.8,0.19l-0.2,-1.1l0.43,-2.28l-0.95,-2.56l1.43,-0.37l0.23,-0.62l-1.43,-2.06Z" data-code="KR" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M456.18,162.07l-0.51,-1.32l0.18,-1.05l1.69,0.2l1.42,-0.71l2.09,-0.07l0.62,-0.51l0.21,0.47l-1.61,0.67l-0.44,1.34l-0.66,0.24l-0.26,0.82l-1.22,-0.49l-0.84,0.46l-0.69,-0.04Z" data-code="SI" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M736.77,185.16l-0.92,-0.42l-0.88,0.62l-1.21,-0.88l0.96,-1.15l0.59,-2.59l-0.46,-0.74l-2.09,-0.77l1.64,-1.52l2.72,-1.58l1.58,-1.91l1.11,0.78l2.17,0.11l0.41,-0.5l-0.3,-1.22l3.52,-1.18l0.94,-1.4l0.98,1.08l-2.19,2.18l0.01,2.14l-1.06,0.54l-1.41,1.4l-1.7,0.52l-1.25,1.09l-0.14,1.98l0.94,0.45l1.15,1.04l-0.13,0.26l-2.6,0.29l-1.13,1.29l-1.22,0.08Z" data-code="KP" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M525.13,288.48l-1.13,-1.57l-0.03,-8.86l2.66,-3.38l1.67,-0.13l2.13,-1.69l3.41,-0.23l7.08,-7.55l2.91,-3.69l0.08,-4.82l2.98,-0.67l1.24,-0.86l0.45,-0.0l-0.2,3.0l-1.21,3.62l-2.73,5.97l-2.13,3.65l-5.03,6.16l-8.56,6.4l-2.78,3.08l-0.8,1.56Z" data-code="SO" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M390.09,248.21l0.12,1.55l0.49,1.46l0.96,0.82l0.05,1.28l-1.26,-0.19l-0.75,0.33l-1.84,-0.61l-5.84,-0.13l-2.54,0.51l-0.22,-1.03l1.77,0.04l2.01,-0.91l1.03,0.48l1.09,0.04l1.29,-0.62l0.14,-0.58l-0.51,-0.74l-1.81,0.25l-1.13,-0.63l-0.79,0.04l-0.72,0.61l-2.31,0.06l-0.92,-1.77l-0.81,-0.64l0.64,-0.35l2.46,-3.74l1.04,0.19l1.38,-0.56l1.19,-0.02l2.72,1.37l3.03,3.48Z" data-code="SN" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M394.46,264.11l-1.73,1.98l-0.58,1.33l-2.07,-1.06l-1.22,-1.26l-0.65,-2.39l1.16,-0.96l0.67,-1.17l1.21,-0.52l1.66,0.0l1.03,1.64l0.52,2.41Z" data-code="SL" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M826.69,311.6l-0.61,0.09l-0.2,-0.33l0.37,0.15l0.44,0.09ZM824.18,307.38l-0.26,-0.3l-0.31,-0.91l0.03,0.0l0.54,1.21ZM823.04,309.33l-1.66,-0.22l-0.2,-0.52l1.16,0.28l0.69,0.46ZM819.28,304.68l1.14,0.65l0.02,0.03l-0.81,-0.44l-0.35,-0.23Z" data-code="SB" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M537.53,210.34l2.0,0.24l0.9,1.32l1.49,-0.06l0.87,2.08l1.29,0.76l0.51,0.99l1.56,1.03l-0.1,1.9l0.32,0.9l1.58,2.47l0.76,0.53l0.7,-0.04l1.68,4.23l7.53,1.33l0.51,-0.29l0.77,1.25l-1.55,4.87l-7.29,2.52l-7.3,1.03l-2.34,1.17l-1.88,2.74l-0.76,0.28l-0.82,-0.78l-0.91,0.12l-2.88,-0.51l-3.51,0.25l-0.86,-0.56l-0.57,0.15l-0.66,1.27l0.16,1.11l-0.43,0.32l-0.93,-1.4l-0.33,-1.16l-1.23,-0.88l-1.27,-2.06l-0.78,-2.22l-1.73,-1.79l-1.14,-0.48l-1.54,-2.31l-0.21,-3.41l-1.44,-2.93l-1.27,-1.16l-1.33,-0.57l-1.31,-3.37l-0.77,-0.67l-0.97,-1.97l-2.8,-4.03l-1.06,-0.17l0.37,-1.96l0.2,-0.72l2.74,0.3l1.08,-0.84l0.6,-0.94l1.74,-0.35l0.65,-1.03l0.71,-0.4l0.1,-0.62l-2.06,-2.28l4.39,-1.22l0.48,-0.37l2.77,0.69l3.66,1.9l7.03,5.5l4.87,0.3Z" data-code="SA" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M480.22,89.3l-4.03,1.17l-2.43,2.86l0.26,2.57l-8.77,6.64l-1.78,5.79l1.78,2.68l2.22,1.96l-2.07,3.77l-2.72,1.13l-0.95,6.04l-1.29,3.01l-2.74,-0.31l-0.4,0.22l-1.31,2.59l-2.34,0.13l-0.75,-3.09l-2.08,-4.03l-1.83,-4.96l1.0,-1.93l2.14,-2.7l0.83,-4.45l-1.6,-2.17l-0.15,-4.94l1.48,-3.39l2.58,-0.15l0.87,-1.59l-0.78,-1.57l3.76,-5.59l4.04,-7.48l2.17,0.01l0.39,-0.29l0.57,-2.07l4.37,0.64l0.46,-0.34l0.33,-2.56l1.1,-0.13l6.94,4.87l0.06,6.32l0.66,1.36Z" data-code="SE" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M505.98,259.4l-0.34,-0.77l-1.17,-0.9l-0.26,-1.61l0.29,-1.81l-0.34,-0.46l-1.16,-0.17l-0.54,0.59l-1.23,0.11l-0.28,0.65l0.53,0.65l0.17,1.22l-2.44,3.0l-0.96,0.19l-2.39,-1.4l-0.95,0.52l-0.38,0.78l-1.11,0.41l-0.29,0.5l-1.94,0.0l-0.54,-0.52l-1.81,-0.09l-0.95,0.4l-2.45,-2.35l-2.07,0.54l-0.73,1.26l-0.6,2.1l-1.25,0.58l-0.75,-0.62l0.27,-2.65l-1.48,-1.78l-0.22,-1.48l-0.92,-0.96l-0.02,-1.29l-0.57,-1.16l-0.68,-0.16l0.69,-1.29l-0.18,-1.14l0.65,-0.62l0.03,-0.55l-0.36,-0.41l1.55,-2.97l1.91,0.16l0.43,-0.4l-0.1,-10.94l2.49,-0.01l0.4,-0.4l-0.0,-4.82l29.02,0.0l0.64,2.04l-0.49,0.66l0.36,2.69l0.93,3.16l2.12,1.55l-0.89,1.04l-1.72,0.39l-0.98,0.9l-1.43,5.65l0.24,1.15l-0.38,2.06l-0.96,2.38l-1.53,1.31l-1.32,2.91l-1.22,0.86l-0.37,1.34Z" data-code="SD" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M241.8,239.2l0.05,-0.65l-0.46,-0.73l0.42,-0.44l0.19,-1.0l-0.09,-1.53l1.66,0.01l1.99,0.63l0.33,0.67l1.28,0.19l0.33,0.76l1.0,0.08l0.8,0.62l-0.45,0.51l-1.13,-0.47l-1.88,-0.01l-1.27,0.59l-0.75,-0.55l-1.01,0.54l-0.79,1.4l-0.23,-0.61Z" data-code="DO" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M528.43,256.18l-0.45,0.66l-0.58,-0.25l-1.51,0.13l-0.18,-1.01l1.45,-1.95l0.83,0.17l0.77,-0.44l0.2,1.0l-1.2,0.51l-0.06,0.7l0.73,0.47Z" data-code="DJ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M452.28,129.07l-1.19,2.24l-2.13,-1.6l-0.23,-0.95l2.98,-0.95l0.57,1.26ZM447.74,126.31l-0.26,0.57l-0.88,-0.07l-1.8,2.53l0.48,1.69l-1.09,0.36l-1.61,-0.39l-0.89,-1.69l-0.07,-3.43l0.96,-1.73l2.02,-0.2l1.09,-1.07l1.33,-0.67l-0.05,1.06l-0.73,1.41l0.3,1.0l1.2,0.64Z" data-code="DK" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M453.14,155.55l-0.55,-0.36l-1.2,-0.1l-1.87,0.57l-2.13,-0.13l-0.56,0.63l-0.86,-0.6l-0.96,0.09l-2.57,-0.93l-0.85,0.67l-1.47,-0.02l0.24,-1.75l1.23,-2.14l-0.28,-0.59l-3.52,-0.58l-0.92,-0.66l0.12,-1.2l-0.48,-0.88l0.27,-2.17l-0.37,-3.03l1.41,-0.22l0.63,-1.26l0.66,-3.19l-0.41,-1.18l0.26,-0.39l1.66,-0.15l0.33,0.54l0.62,0.07l1.7,-1.69l-0.54,-3.02l1.37,0.33l1.31,-0.37l0.31,1.18l2.25,0.71l-0.02,0.92l0.5,0.4l2.55,-0.65l1.34,-0.87l2.57,1.24l1.06,0.98l0.48,1.44l-0.57,0.74l-0.0,0.48l0.87,1.15l0.57,1.64l-0.14,1.29l0.82,1.7l-1.5,-0.07l-0.56,0.57l-4.47,2.15l-0.22,0.54l0.68,2.26l2.58,2.16l-0.66,1.11l-0.79,0.36l-0.23,0.43l0.32,1.87Z" data-code="DE" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M528.27,246.72l0.26,-0.42l-0.22,-1.01l0.19,-1.5l0.92,-0.69l-0.07,-1.35l0.39,-0.75l1.01,0.47l3.34,-0.27l3.76,0.41l0.95,0.81l1.36,-0.58l1.74,-2.62l2.18,-1.09l6.86,-0.94l2.48,5.41l-1.64,0.76l-0.56,1.9l-6.23,2.16l-2.29,1.8l-1.93,0.05l-1.41,1.02l-4.24,0.74l-1.72,1.49l-3.28,0.19l-0.52,-1.18l0.02,-1.51l-1.34,-3.29Z" data-code="YE" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M462.89,152.8l0.04,2.25l-1.07,0.0l-0.33,0.63l0.36,0.51l-1.04,2.13l-2.02,0.07l-1.33,0.7l-5.29,-0.99l-0.47,-0.93l-0.44,-0.21l-2.47,0.55l-0.42,0.51l-3.18,-0.81l0.43,-0.91l1.12,0.78l0.6,-0.17l0.25,-0.58l1.93,0.12l1.86,-0.56l1.0,0.08l0.68,0.57l0.62,-0.15l0.26,-0.77l-0.3,-1.78l0.8,-0.44l0.68,-1.15l1.52,0.85l0.47,-0.06l1.34,-1.25l0.64,-0.17l1.81,0.92l1.28,-0.11l0.7,0.37Z" data-code="AT" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M441.46,188.44l-0.32,1.07l0.39,2.64l-0.54,2.16l-1.58,1.82l0.37,2.39l1.91,1.55l0.18,0.8l1.42,1.03l1.84,7.23l0.12,1.16l-0.57,5.0l0.2,1.51l-0.87,0.99l-0.02,0.51l1.41,1.86l0.14,1.2l0.89,1.48l0.5,0.16l0.98,-0.41l1.73,1.08l0.82,1.23l-8.22,4.81l-7.23,5.11l-3.43,1.13l-2.3,0.21l-0.28,-1.59l-2.56,-1.09l-0.67,-1.25l-26.12,-17.86l0.01,-3.47l3.77,-1.88l2.44,-0.41l2.12,-0.75l1.08,-1.42l2.81,-1.05l0.35,-2.08l1.33,-0.29l1.04,-0.94l3.47,-0.69l0.46,-1.08l-0.1,-0.45l-0.58,-0.52l-0.82,-2.81l-0.19,-1.83l-0.78,-1.49l2.03,-1.31l2.63,-0.48l1.7,-1.22l2.31,-0.84l8.24,-0.73l1.49,0.38l2.28,-1.1l2.46,-0.02l0.92,0.6l1.35,-0.05Z" data-code="DZ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M892.72,99.2l1.31,0.53l1.41,-0.37l1.89,0.98l1.89,0.42l-1.32,0.58l-2.9,-1.53l-2.08,0.22l-0.26,-0.15l0.07,-0.67ZM183.22,150.47l0.37,1.47l1.12,0.85l4.23,0.7l2.39,0.98l2.17,-0.38l1.85,0.5l-1.55,0.65l-3.49,2.61l-0.16,0.77l0.5,0.39l2.33,-0.61l1.77,1.02l5.15,-2.4l-0.31,0.65l0.25,0.56l1.36,0.38l1.71,1.16l4.7,-0.88l0.67,0.85l1.31,0.21l0.58,0.58l-1.34,0.17l-2.18,-0.32l-3.6,0.89l-2.71,3.25l0.35,0.9l0.59,-0.0l0.55,-0.6l-1.36,4.65l0.29,3.09l0.67,1.58l0.61,0.45l1.77,-0.44l1.6,-1.96l0.14,-2.21l-0.82,-1.96l0.11,-1.13l1.19,-2.37l0.44,-0.33l0.48,0.75l0.4,-0.29l0.4,-1.37l0.6,-0.47l0.24,-0.8l1.69,0.49l1.65,1.08l-0.03,2.37l-1.27,1.13l-0.0,1.13l0.87,0.36l1.66,-1.29l0.5,0.17l0.5,2.6l-2.49,3.75l0.17,0.61l1.54,0.62l1.48,0.17l1.92,-0.44l4.72,-2.15l2.16,-1.8l-0.05,-1.24l0.75,-0.22l3.92,0.36l2.12,-1.05l0.21,-0.4l-0.28,-1.48l3.27,-2.4l8.32,-0.02l0.56,-0.82l1.9,-0.77l0.93,-1.51l0.74,-2.37l1.58,-1.98l0.92,0.62l1.47,-0.47l0.8,0.66l-0.0,4.09l1.96,2.6l-2.34,1.31l-5.37,2.09l-1.83,2.72l0.02,1.79l0.83,1.59l0.54,0.23l-6.19,0.94l-2.2,0.89l-0.23,0.48l0.45,0.29l2.99,-0.46l-2.19,0.56l-1.13,0.0l-0.15,-0.32l-0.48,0.08l-0.76,0.82l0.22,0.67l0.32,0.06l-0.41,1.62l-1.27,1.58l-1.48,-1.07l-0.49,-0.04l-0.16,0.46l0.52,1.58l0.61,0.59l0.03,0.79l-0.95,1.38l-1.21,-1.22l-0.27,-2.27l-0.35,-0.35l-0.42,0.25l-0.48,1.27l0.33,1.41l-0.97,-0.27l-0.48,0.24l0.18,0.5l1.52,0.83l0.1,2.52l0.79,0.51l0.52,3.42l-1.42,1.88l-2.47,0.8l-1.71,1.66l-1.31,0.25l-1.27,1.03l-0.43,0.99l-2.69,1.78l-2.64,3.03l-0.45,2.12l0.45,2.08l0.85,2.38l1.09,1.9l0.04,1.2l1.16,3.06l-0.18,2.69l-0.55,1.43l-0.47,0.21l-0.89,-0.23l-0.49,-1.18l-0.87,-0.56l-2.75,-5.16l0.48,-1.68l-0.72,-1.78l-2.01,-2.38l-1.12,-0.53l-2.72,1.18l-1.47,-1.35l-1.57,-0.68l-2.99,0.31l-2.17,-0.3l-2.0,0.19l-1.15,0.46l-0.19,0.58l0.39,0.63l0.14,1.34l-0.84,-0.2l-0.84,0.46l-1.58,-0.07l-2.08,-1.44l-2.09,0.33l-1.91,-0.62l-3.73,0.84l-2.39,2.07l-2.54,1.22l-1.45,1.41l-0.61,1.38l0.34,3.71l-0.29,0.02l-3.5,-1.33l-1.25,-3.11l-1.44,-1.5l-2.24,-3.56l-1.76,-1.09l-2.27,-0.01l-1.71,2.07l-1.76,-0.69l-1.16,-0.74l-1.52,-2.98l-3.93,-3.16l-4.34,-0.0l-0.4,0.4l-0.0,0.74l-6.5,0.02l-9.02,-3.14l-0.34,-0.71l-5.7,0.49l-0.43,-1.29l-1.62,-1.61l-1.14,-0.38l-0.55,-0.88l-1.28,-0.13l-1.01,-0.77l-2.22,-0.27l-0.43,-0.3l-0.36,-1.58l-2.4,-2.83l-2.01,-3.85l-0.06,-0.9l-2.92,-3.26l-0.33,-2.29l-1.3,-1.66l0.52,-2.37l-0.09,-2.57l-0.78,-2.3l0.95,-2.82l0.61,-5.68l-0.47,-4.27l-1.46,-4.08l3.19,0.79l1.26,2.83l0.69,0.08l0.69,-1.14l-1.1,-4.79l68.76,-0.0l0.4,-0.4l0.14,-0.86ZM32.44,67.52l1.73,1.97l0.55,0.05l0.99,-0.79l3.65,0.24l-0.09,0.62l0.32,0.45l3.83,0.77l2.61,-0.43l5.19,1.4l4.84,0.43l1.89,0.57l3.42,-0.7l6.14,1.87l-0.03,38.06l0.38,0.4l2.39,0.11l2.31,0.98l3.9,3.99l0.55,0.04l2.4,-2.03l2.16,-1.04l1.2,1.71l3.95,3.14l4.09,6.63l4.2,2.29l0.06,1.83l-1.02,1.23l-1.16,-1.08l-2.04,-1.03l-0.67,-2.89l-3.28,-3.03l-1.65,-3.57l-6.35,-0.32l-2.82,-1.01l-5.26,-3.85l-6.77,-2.04l-3.53,0.3l-4.81,-1.69l-3.25,-1.63l-2.78,0.8l-0.28,0.46l0.44,2.21l-3.91,0.96l-2.26,1.27l-2.3,0.65l-0.27,-1.65l1.05,-3.42l2.49,-1.09l0.16,-0.6l-0.69,-0.96l-0.55,-0.1l-3.19,2.12l-1.78,2.56l-3.55,2.61l-0.04,0.61l1.56,1.52l-2.07,2.29l-5.11,2.57l-0.77,1.66l-3.76,1.77l-0.92,1.73l-2.69,1.38l-1.81,-0.22l-6.95,3.32l-3.97,0.91l4.85,-2.5l2.59,-1.86l3.26,-0.52l1.19,-1.4l3.42,-2.1l2.59,-2.27l0.42,-2.68l1.23,-2.1l-0.04,-0.46l-0.45,-0.11l-2.68,1.03l-0.63,-0.49l-0.53,0.03l-1.05,1.04l-1.36,-1.54l-0.66,0.08l-0.32,0.62l-0.58,-1.14l-0.56,-0.16l-2.41,1.42l-1.07,-0.0l-0.17,-1.75l0.3,-1.71l-1.61,-1.33l-3.41,0.59l-1.96,-1.63l-1.57,-0.84l-0.15,-2.21l-1.7,-1.43l0.82,-1.88l1.99,-2.12l0.88,-1.92l1.71,-0.24l2.04,0.51l1.87,-1.77l1.91,0.25l1.91,-1.23l0.17,-0.43l-0.47,-1.82l-1.07,-0.7l1.39,-1.17l0.12,-0.45l-0.39,-0.26l-1.65,0.07l-2.66,0.88l-0.75,0.78l-1.92,-0.8l-3.46,0.44l-3.44,-0.91l-1.06,-1.61l-2.65,-1.99l2.91,-1.43l5.5,-2.0l1.52,0.0l-0.26,1.62l0.41,0.46l5.29,-0.16l0.3,-0.65l-2.03,-2.59l-3.14,-1.68l-1.79,-2.12l-2.4,-1.83l-3.09,-1.24l1.04,-1.69l4.23,-0.14l3.36,-2.07l0.73,-2.27l2.39,-1.99l2.42,-0.52l4.65,-1.97l2.46,0.23l3.71,-2.35l3.5,0.89ZM37.6,123.41l-2.25,1.23l-0.95,-0.69l-0.29,-1.24l3.21,-1.63l1.42,0.21l0.67,0.7l-1.8,1.42ZM31.06,234.03l0.98,0.47l0.74,0.87l-1.77,1.07l-0.44,-1.53l0.49,-0.89ZM29.34,232.07l0.18,0.05l0.08,0.05l-0.16,0.03l-0.11,-0.14ZM25.16,230.17l0.05,-0.03l0.18,0.22l-0.13,-0.01l-0.1,-0.18ZM5.89,113.26l-1.08,0.41l-2.21,-1.12l1.53,-0.4l1.62,0.28l0.14,0.83Z" data-code="US" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M489.16,122.85l0.96,0.66l0.22,1.65l0.68,1.76l-3.65,1.7l-2.23,-1.58l-1.29,-0.26l-0.68,-0.77l-2.42,0.34l-4.16,-0.23l-2.47,0.9l0.06,-1.98l1.13,-2.06l1.95,-1.02l2.12,2.58l2.01,-0.07l0.38,-0.33l0.44,-2.52l1.76,-0.53l3.06,1.7l2.15,0.07Z" data-code="LV" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M286.85,372.74l-0.92,1.5l-2.59,1.44l-1.69,-0.52l-1.42,0.26l-2.39,-1.19l-1.52,0.08l-1.27,-1.3l0.16,-1.5l0.56,-0.79l-0.02,-2.73l1.21,-4.74l1.19,-0.21l2.37,2.0l1.08,0.03l4.36,3.17l1.22,1.6l-0.96,1.5l0.61,1.4Z" data-code="UY" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M510.37,198.01l-0.88,0.51l1.82,-3.54l0.62,0.08l0.22,0.61l-1.13,0.88l-0.65,1.47Z" data-code="LB" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M689.54,248.53l-1.76,-0.74l-0.49,0.15l-0.94,1.46l-1.32,-0.64l0.62,-0.98l0.11,-2.17l-2.04,-2.42l-0.25,-2.65l-1.9,-2.1l-2.15,-0.31l-0.78,0.91l-1.12,0.06l-1.05,-0.4l-2.06,1.2l-0.04,-1.59l0.61,-2.68l-0.36,-0.49l-1.35,-0.1l-0.11,-1.23l-0.96,-0.88l1.96,-1.89l0.39,0.36l1.33,0.07l0.42,-0.45l-0.34,-2.66l0.7,-0.21l1.28,1.81l1.11,2.35l0.36,0.23l2.82,0.02l0.71,1.67l-1.39,0.65l-0.72,0.93l0.13,0.6l2.91,1.51l3.6,5.25l1.88,1.78l0.56,1.62l-0.35,1.96Z" data-code="LA" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M724.01,226.68l-0.74,1.48l-0.9,-1.52l-0.25,-1.74l1.38,-2.44l1.73,-1.74l0.64,0.44l-1.85,5.52Z" data-code="TW" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M266.64,259.32l0.28,-1.16l1.13,-0.22l-0.06,1.2l-1.35,0.18Z" data-code="TT" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M513.21,175.47l3.64,1.17l3.05,-0.44l2.1,0.26l3.11,-1.56l2.46,-0.13l2.19,1.33l0.33,0.82l-0.22,1.33l0.25,0.44l2.28,1.13l-1.17,0.57l-0.21,0.45l0.75,3.2l-0.41,1.16l1.13,1.92l-0.55,0.22l-0.9,-0.67l-2.91,-0.37l-1.24,0.46l-4.23,0.41l-2.81,1.05l-1.91,0.01l-1.52,-0.53l-2.58,0.75l-0.66,-0.45l-0.62,0.3l-0.12,1.45l-0.89,0.84l-0.47,-0.67l0.79,-1.3l-0.41,-0.2l-1.43,0.23l-2.0,-0.63l-2.02,1.65l-3.51,0.3l-2.13,-1.53l-2.7,-0.1l-0.86,1.24l-1.38,0.27l-2.29,-1.44l-2.71,-0.01l-1.37,-2.65l-1.68,-1.52l1.07,-1.99l-0.09,-0.49l-1.27,-1.12l2.37,-2.41l3.7,-0.11l1.28,-2.24l4.49,0.37l3.21,-1.97l2.81,-0.82l3.99,-0.06l4.29,2.07ZM488.79,176.72l-1.72,1.31l-0.5,-0.88l1.37,-2.57l-0.7,-0.85l1.7,-0.63l1.8,0.34l0.46,1.17l1.76,0.78l-2.87,0.32l-1.3,1.01Z" data-code="TR" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M624.16,268.99l-1.82,0.48l-0.99,-1.67l-0.42,-3.46l0.95,-3.43l1.21,0.98l2.26,4.19l-0.34,2.33l-0.85,0.58Z" data-code="LK" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M448.1,188.24l-1.0,1.27l-0.02,1.32l0.84,0.88l-0.28,2.09l-1.53,1.32l-0.12,0.42l0.48,1.54l1.42,0.32l0.53,1.11l0.9,0.52l-0.11,1.67l-3.54,2.64l-0.1,2.38l-0.58,0.3l-0.96,-4.45l-1.54,-1.25l-0.16,-0.78l-1.92,-1.56l-0.18,-1.76l1.51,-1.62l0.59,-2.34l-0.38,-2.78l0.42,-1.21l2.45,-1.05l1.29,0.26l-0.06,1.11l0.58,0.38l1.47,-0.73Z" data-code="TN" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M734.55,307.93l-0.1,-0.97l4.5,-0.86l-2.82,1.28l-1.59,0.55Z" data-code="TL" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M553.03,173.76l-0.04,0.34l-0.09,-0.22l0.13,-0.12ZM555.87,172.66l0.45,-0.1l1.48,0.74l2.06,2.43l4.07,-0.18l0.38,-0.51l-0.32,-1.19l1.92,-0.94l1.91,-1.59l2.94,1.39l0.43,2.47l1.19,0.67l2.58,-0.13l0.62,0.4l1.32,3.12l4.54,3.44l2.67,1.45l3.06,1.14l-0.04,1.05l-1.33,-0.75l-0.59,0.19l-0.32,0.84l-2.2,0.81l-0.46,2.13l-1.21,0.74l-1.91,0.42l-0.73,1.33l-1.56,0.31l-2.22,-0.94l-0.2,-2.17l-0.38,-0.36l-1.73,-0.09l-2.76,-2.46l-2.14,-0.4l-2.84,-1.48l-1.78,-0.27l-1.24,0.53l-1.57,-0.08l-2.0,1.69l-1.7,0.43l-0.36,-1.58l0.36,-2.98l-0.22,-0.4l-1.65,-0.84l0.54,-1.69l-0.34,-0.52l-1.22,-0.13l0.36,-1.64l2.22,0.59l2.2,-0.95l0.12,-0.65l-1.77,-1.74l-0.66,-1.57Z" data-code="TM" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M597.75,178.82l-2.54,-0.44l-0.47,0.34l-0.24,1.7l0.43,0.45l2.64,-0.22l3.18,0.95l4.39,-0.41l0.56,2.37l0.52,0.29l0.67,-0.24l1.11,0.49l0.21,2.13l-3.76,-0.21l-1.8,1.32l-1.76,0.74l-0.61,-0.58l0.21,-2.23l-0.64,-0.49l-0.07,-0.93l-1.36,-0.66l-0.45,0.07l-1.08,1.01l-0.55,1.48l-1.31,-0.05l-0.95,1.16l-0.9,-0.35l-1.86,0.74l1.26,-2.83l-0.54,-2.17l-1.67,-0.82l0.33,-0.66l2.18,-0.04l1.19,-1.63l0.76,-1.79l2.43,-0.5l-0.26,1.0l0.73,1.05Z" data-code="TJ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M491.06,363.48l-0.49,0.15l-1.49,-1.67l1.1,-1.43l2.19,-1.44l1.51,1.27l-0.98,1.82l-1.23,0.38l-0.62,0.93Z" data-code="LS" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M670.27,255.86l-1.41,3.87l0.15,2.0l0.38,0.36l1.38,0.07l0.9,2.04l0.55,2.34l1.4,1.44l1.61,0.38l0.96,0.97l-0.5,0.64l-1.1,0.2l-0.34,-1.18l-2.04,-1.1l-0.63,0.23l-0.63,-0.62l-0.48,-1.3l-2.56,-2.63l-0.73,0.41l0.95,-3.89l2.16,-4.22ZM670.67,254.77l-0.92,-2.18l-0.26,-2.61l-2.14,-3.06l0.71,-0.49l0.89,-2.59l-3.61,-5.45l0.87,-0.51l1.05,-2.58l1.74,-0.18l2.6,-1.59l0.76,0.56l0.13,1.39l0.37,0.36l1.23,0.09l-0.51,2.28l0.05,2.42l0.6,0.34l2.43,-1.42l0.77,0.39l1.47,-0.07l0.71,-0.88l1.48,0.14l1.71,1.88l0.25,2.65l1.92,2.11l-0.1,1.89l-0.61,0.86l-2.22,-0.33l-3.5,0.64l-1.6,2.12l0.36,2.58l-1.51,-0.79l-1.84,-0.01l0.28,-1.52l-0.4,-0.47l-2.21,0.01l-0.4,0.37l-0.19,2.74l-0.34,0.93Z" data-code="TH" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M596.68,420.38l-3.2,0.18l-0.05,-1.26l0.39,-1.41l1.3,0.78l2.08,0.35l-0.52,1.36Z" data-code="TF" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M422.7,257.63l-0.09,1.23l1.53,1.52l0.08,1.09l0.5,0.65l-0.11,5.62l0.49,1.47l-1.31,0.35l-1.02,-2.13l-0.18,-1.12l0.53,-2.19l-0.63,-1.16l-0.22,-3.68l-1.01,-1.4l0.07,-0.28l1.37,0.03Z" data-code="TG" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M480.25,235.49l0.12,9.57l-2.1,0.05l-1.14,1.89l-0.69,1.63l0.34,0.73l-0.66,0.91l0.24,0.89l-0.86,1.95l0.45,0.5l0.6,-0.1l0.34,0.64l0.03,1.38l0.9,1.04l-1.45,0.43l-1.27,1.03l-1.83,2.76l-2.16,1.07l-2.31,-0.15l-0.86,0.25l-0.26,0.49l0.17,0.61l-2.11,1.68l-2.85,0.87l-1.09,-0.57l-0.73,0.66l-1.12,0.1l-1.1,-3.12l-1.25,-0.64l-1.22,-1.22l0.29,-0.64l3.01,0.04l0.35,-0.6l-1.3,-2.2l-0.08,-3.31l-0.97,-1.66l0.22,-1.04l-0.38,-0.48l-1.22,-0.04l0.0,-1.25l-0.98,-1.07l0.96,-3.01l3.25,-2.65l0.13,-3.33l0.95,-5.18l0.52,-1.07l-0.1,-0.48l-0.91,-0.78l-0.2,-0.96l-0.8,-0.58l-0.55,-3.65l2.1,-1.2l19.57,9.83Z" data-code="TD" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M483.48,203.15l-0.75,1.1l0.29,1.39l-0.6,1.83l0.73,2.14l0.0,24.12l-2.48,0.01l-0.41,0.85l-19.41,-9.76l-4.41,2.28l-1.37,-1.33l-3.82,-1.1l-1.14,-1.65l-1.98,-1.23l-1.22,0.32l-0.66,-1.11l-0.17,-1.26l-1.28,-1.69l0.87,-1.19l-0.07,-4.34l0.43,-2.27l-0.86,-3.45l1.13,-0.76l0.22,-1.16l-0.2,-1.03l3.48,-2.61l0.29,-1.94l2.45,0.8l1.18,-0.21l1.98,0.44l3.15,1.18l1.37,2.54l5.72,1.67l2.64,1.35l1.61,-0.72l1.29,-1.34l-0.44,-2.34l0.66,-1.13l1.67,-1.21l1.57,-0.35l3.14,0.53l1.08,1.28l3.99,0.78l0.36,0.54Z" data-code="LY" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M550.76,223.97l1.88,-0.4l3.84,0.02l4.78,-4.75l0.19,0.36l0.26,1.58l-0.81,0.01l-0.39,0.35l-0.08,2.04l-0.81,0.63l-0.01,0.96l-0.66,0.99l-0.39,1.41l-7.08,-1.25l-0.7,-1.96Z" data-code="AE" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M240.68,256.69l0.53,0.75l-0.02,1.06l-1.07,1.78l0.95,2.0l0.42,0.22l1.4,-0.44l0.56,-1.83l-0.77,-1.17l-0.1,-1.47l2.82,-0.93l0.26,-0.49l-0.28,-0.96l0.3,-0.28l0.66,1.31l1.96,0.26l1.4,1.22l0.08,0.68l0.39,0.35l4.81,-0.22l1.49,1.11l1.92,0.31l1.67,-0.84l0.22,-0.6l3.44,-0.14l-0.17,0.55l0.86,1.19l2.19,0.35l1.67,1.1l0.37,1.86l0.41,0.32l1.55,0.17l-1.66,1.35l-0.22,0.92l0.65,0.97l-1.67,0.54l-0.3,0.4l0.04,0.99l-0.56,0.57l-0.01,0.55l1.85,2.27l-0.66,0.69l-4.47,1.29l-0.72,0.54l-3.69,-0.9l-0.71,0.27l-0.02,0.7l0.91,0.53l-0.08,1.54l0.35,1.58l0.35,0.31l1.66,0.17l-1.3,0.52l-0.48,1.13l-2.68,0.91l-0.6,0.77l-1.57,0.13l-1.17,-1.13l-0.8,-2.52l-1.25,-1.26l1.02,-1.23l-1.29,-2.95l0.18,-1.62l1.0,-2.21l-0.2,-0.49l-1.14,-0.46l-4.02,0.36l-1.82,-2.1l-1.57,-0.33l-2.99,0.22l-1.06,-0.97l0.25,-1.23l-0.2,-1.01l-0.59,-0.69l-0.29,-1.06l-1.08,-0.39l0.78,-2.79l1.9,-2.11Z" data-code="VE" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M600.7,188.88l-1.57,1.3l-0.1,0.48l0.8,2.31l-1.09,1.04l-0.03,1.27l-0.48,0.71l-2.16,-0.08l-0.37,0.59l0.78,1.48l-1.38,0.69l-1.06,1.69l0.06,1.7l-0.65,0.52l-0.91,-0.21l-1.91,0.36l-0.48,0.77l-1.88,0.13l-1.4,1.56l-0.18,2.32l-2.91,1.02l-1.65,-0.23l-0.71,0.55l-1.41,-0.3l-2.41,0.39l-3.52,-1.17l1.96,-2.35l-0.21,-1.78l-0.3,-0.34l-1.63,-0.4l-0.19,-1.58l-0.75,-2.03l0.95,-1.36l-0.19,-0.6l-0.73,-0.28l1.47,-4.8l2.14,0.9l2.12,-0.36l0.74,-1.34l1.77,-0.39l1.54,-0.92l0.63,-2.31l1.87,-0.5l0.49,-0.81l0.94,0.56l2.13,0.11l2.55,0.92l1.95,-0.83l0.65,0.43l0.56,-0.13l0.69,-1.12l1.57,-0.08l0.72,-1.66l0.79,-0.74l0.8,0.39l-0.17,0.56l0.71,0.58l-0.08,2.39l1.11,0.95ZM601.37,188.71l1.73,-0.71l1.43,-1.18l4.03,0.35l-2.23,0.74l-4.95,0.8Z" data-code="AF" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M530.82,187.47l0.79,0.66l1.26,-0.28l1.46,3.08l1.63,0.94l0.14,1.23l-1.22,1.05l-0.53,2.52l1.73,2.67l3.12,1.62l1.15,1.88l-0.38,1.85l0.39,0.48l0.41,-0.0l0.02,1.07l0.76,0.94l-2.47,-0.1l-1.71,2.44l-4.31,-0.2l-7.02,-5.48l-3.73,-1.94l-2.88,-0.73l-0.85,-2.87l5.45,-3.02l0.95,-3.43l-0.19,-1.96l1.27,-0.7l1.22,-1.7l0.87,-0.36l2.69,0.34Z" data-code="IQ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M384.14,88.06l-0.37,2.61l2.54,2.51l-2.9,2.75l-9.19,3.4l-9.25,-1.66l1.7,-1.22l-0.1,-0.7l-4.05,-1.47l2.96,-0.53l0.33,-0.43l-0.11,-1.2l-0.33,-0.36l-4.67,-0.85l1.28,-2.04l3.45,-0.56l3.77,2.72l0.44,0.02l3.64,-2.16l3.3,1.08l3.98,-2.16l3.58,0.26Z" data-code="IS" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M533.43,187.16l-1.27,-2.15l0.42,-0.98l-0.71,-3.04l1.03,-0.5l0.33,0.83l1.26,1.35l2.05,0.51l1.11,-0.16l2.89,-2.11l0.62,-0.14l0.39,0.46l-0.72,1.2l0.06,0.49l1.56,1.53l0.65,0.04l0.67,1.81l2.56,0.83l1.87,1.48l3.69,0.49l3.91,-0.76l0.47,-0.73l2.17,-0.6l1.66,-1.54l1.51,0.08l1.18,-0.53l1.59,0.24l2.83,1.48l1.88,0.3l2.77,2.47l1.77,0.18l0.18,1.99l-1.68,5.49l0.24,0.5l0.61,0.23l-0.82,1.48l0.8,2.18l0.19,1.71l0.3,0.34l1.63,0.4l0.15,1.32l-2.15,2.35l-0.01,0.53l2.21,3.03l2.34,1.24l0.06,2.14l1.24,0.72l0.11,0.69l-3.31,1.27l-1.08,3.03l-9.68,-1.68l-0.99,-3.05l-1.43,-0.73l-2.17,0.46l-2.47,1.26l-2.83,-0.82l-2.46,-2.02l-2.41,-0.8l-3.42,-6.06l-0.48,-0.2l-1.18,0.39l-1.44,-0.82l-0.5,0.08l-0.65,0.74l-0.97,-1.01l-0.02,-1.31l-0.71,-0.39l0.26,-1.81l-1.29,-2.11l-3.13,-1.63l-1.58,-2.43l0.5,-1.9l1.31,-1.26l-0.19,-1.66l-1.74,-1.1l-1.57,-3.3Z" data-code="IR" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M536.99,182.33l-0.28,0.03l-1.23,-2.13l-0.93,0.01l-0.62,-0.66l-0.69,-0.07l-0.96,-0.81l-1.56,-0.62l0.19,-1.12l-0.26,-0.79l2.72,-0.36l1.09,1.01l-0.17,0.92l1.02,0.78l-0.47,0.62l0.08,0.56l2.04,1.23l0.04,1.4Z" data-code="AM" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M451.59,158.63l3.48,0.94l-0.21,1.17l0.3,0.83l-1.49,-0.24l-2.04,1.1l-0.21,0.39l0.13,1.45l-0.25,1.12l0.82,1.57l2.39,1.63l1.31,2.54l2.79,2.43l2.05,0.08l0.21,0.23l-0.39,0.33l0.09,0.67l4.05,1.97l2.17,1.76l-0.16,0.36l-1.17,-1.08l-2.18,-0.49l-0.44,0.2l-1.05,1.91l0.14,0.54l1.57,0.95l-0.19,0.98l-1.06,0.33l-1.25,2.34l-0.37,0.08l0.0,-0.33l1.0,-2.45l-1.73,-3.17l-1.12,-0.51l-0.88,-1.33l-1.51,-0.51l-1.27,-1.25l-1.75,-0.18l-4.12,-3.21l-1.62,-1.65l-1.03,-3.19l-3.53,-1.36l-1.3,0.51l-1.69,1.41l0.16,-0.72l-0.28,-0.47l-1.14,-0.33l-0.53,-1.96l0.72,-0.78l0.04,-0.48l-0.65,-1.17l0.8,0.39l1.4,-0.23l1.11,-0.84l0.52,0.35l1.19,-0.1l0.75,-1.2l1.53,0.33l1.36,-0.56l0.35,-1.14l1.08,0.32l0.68,-0.64l1.98,-0.44l0.42,0.82ZM459.19,184.75l-0.65,1.65l0.32,1.05l-0.31,0.89l-1.5,-0.85l-4.5,-1.67l0.19,-0.82l2.67,0.23l3.78,-0.48ZM443.93,176.05l1.18,1.66l-0.3,3.32l-1.06,-0.01l-0.77,0.73l-0.53,-0.44l-0.1,-3.37l-0.39,-1.22l1.04,0.01l0.92,-0.68Z" data-code="IT" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M690.56,230.25l-2.7,1.82l-2.09,2.46l-0.63,1.95l4.31,6.45l2.32,1.65l1.43,1.94l1.11,4.59l-0.32,4.24l-1.93,1.54l-2.84,1.61l-2.11,2.15l-2.73,2.06l-0.59,-1.05l0.63,-1.53l-0.13,-0.47l-1.34,-1.04l1.51,-0.71l2.55,-0.18l0.3,-0.63l-0.82,-1.14l4.0,-2.07l0.31,-3.05l-0.57,-1.77l0.42,-2.66l-0.73,-1.97l-1.86,-1.76l-3.63,-5.29l-2.72,-1.46l0.36,-0.47l1.5,-0.64l0.21,-0.52l-0.97,-2.27l-0.37,-0.24l-2.83,-0.02l-2.24,-3.9l0.83,-0.4l4.39,-0.29l2.06,-1.31l1.15,0.89l1.88,0.4l-0.17,1.51l1.35,1.16l1.67,0.45Z" data-code="VN" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M249.29,428.93l-2.33,-0.52l-5.83,-0.43l-0.89,-1.66l0.05,-2.37l-0.45,-0.4l-1.43,0.18l-0.67,-0.91l-0.2,-3.13l1.88,-1.47l0.79,-2.04l-0.25,-1.7l1.3,-2.68l0.91,-4.15l-0.22,-1.69l0.85,-0.45l0.2,-0.44l-0.27,-1.16l-0.98,-0.68l0.59,-0.92l-0.05,-0.5l-1.04,-1.07l-0.52,-3.1l0.97,-0.86l-0.42,-3.58l1.2,-5.43l1.38,-0.98l0.16,-0.43l-0.75,-2.79l-0.01,-2.43l1.78,-1.75l0.06,-2.57l1.43,-2.85l0.01,-2.58l-0.69,-0.74l-1.09,-4.52l1.47,-2.7l-0.18,-2.79l0.85,-2.35l1.59,-2.46l1.73,-1.64l0.05,-0.52l-0.6,-0.84l0.44,-0.85l-0.07,-4.19l2.7,-1.44l0.86,-2.75l-0.21,-0.71l1.76,-2.01l2.9,0.57l1.38,1.78l0.68,-0.08l0.87,-1.87l2.39,0.09l4.95,4.77l2.17,0.49l3.0,1.92l2.47,1.0l0.25,0.82l-2.37,3.93l0.23,0.59l5.39,1.16l2.12,-0.44l2.45,-2.16l0.5,-2.38l0.76,-0.31l0.98,1.2l-0.04,1.8l-3.67,2.51l-2.85,2.66l-3.43,3.88l-1.3,5.07l0.01,2.72l-0.54,0.73l-0.36,3.28l3.14,2.64l-0.16,2.11l1.4,1.11l-0.1,1.09l-2.29,3.52l-3.55,1.49l-4.92,0.6l-2.71,-0.29l-0.43,0.51l0.5,1.65l-0.49,2.1l0.38,1.42l-1.19,0.83l-2.36,0.38l-2.3,-1.04l-1.38,0.83l0.41,3.64l1.69,0.91l1.4,-0.71l0.36,0.76l-2.04,0.86l-2.01,1.89l-0.97,4.63l-2.34,0.1l-2.09,1.78l-0.61,2.75l2.46,2.31l2.17,0.63l-0.7,2.32l-2.83,1.73l-1.73,3.86l-2.17,1.22l-1.16,1.67l0.75,3.76l1.04,1.28ZM256.71,438.88l-2.0,0.15l-1.4,-1.22l-3.82,-0.1l-0.0,-5.83l1.6,3.05l3.26,2.07l3.08,0.78l-0.71,1.1Z" data-code="AR" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M705.8,353.26l0.26,0.04l0.17,-0.47l-0.48,-1.42l0.92,1.11l0.45,0.15l0.27,-0.39l-0.1,-1.56l-1.98,-3.63l1.09,-3.31l-0.24,-1.57l0.34,-0.62l0.38,1.06l0.43,-0.19l0.99,-1.7l1.91,-0.83l1.29,-1.15l1.81,-0.91l0.96,-0.17l0.92,0.26l1.92,-0.95l1.47,-0.28l1.03,-0.8l1.43,0.04l2.78,-0.84l1.36,-1.15l0.71,-1.45l1.41,-1.26l0.3,-2.58l1.27,-1.59l0.78,1.65l0.54,0.19l1.07,-0.51l0.15,-0.6l-0.73,-1.0l0.45,-0.71l0.78,0.39l0.58,-0.3l0.28,-1.82l1.87,-2.14l1.12,-0.39l0.28,-0.58l0.62,0.17l0.53,-0.73l1.87,-0.57l1.65,1.05l1.35,1.48l3.39,0.38l0.43,-0.54l-0.46,-1.23l1.05,-1.79l1.04,-0.61l0.14,-0.55l-0.25,-0.41l0.88,-1.17l1.31,-0.77l1.3,0.27l2.1,-0.48l0.31,-0.4l-0.05,-1.3l-0.92,-0.77l1.48,0.56l1.41,1.07l2.11,0.65l0.81,-0.2l1.4,0.7l1.69,-0.66l0.8,0.19l0.64,-0.33l0.71,0.77l-1.33,1.94l-0.71,0.07l-0.35,0.51l0.24,0.86l-1.52,2.35l0.12,1.05l2.15,1.65l1.97,0.85l3.04,2.36l1.97,0.65l0.55,0.88l2.72,0.85l1.84,-1.1l2.07,-5.97l-0.42,-3.59l0.3,-1.73l0.47,-0.87l-0.31,-0.68l1.09,-3.28l0.46,-0.47l0.4,0.71l0.16,1.51l0.65,0.52l0.16,1.04l0.85,1.21l0.12,2.38l0.9,2.0l0.57,0.18l1.3,-0.78l1.69,1.7l-0.2,1.08l0.53,2.2l0.39,1.3l0.68,0.48l0.6,1.95l-0.19,1.48l0.81,1.76l6.01,3.69l-0.11,0.76l1.38,1.58l0.95,2.77l0.58,0.22l0.72,-0.41l0.8,0.9l0.61,0.01l0.46,2.41l4.81,4.71l0.66,2.02l-0.07,3.31l1.14,2.2l-0.13,2.24l-1.1,3.68l0.03,1.64l-0.47,1.89l-1.05,2.4l-1.9,1.47l-1.72,3.51l-2.38,6.09l-0.24,2.82l-1.14,0.8l-2.85,0.15l-2.31,1.19l-2.51,2.25l-3.09,-1.57l0.3,-1.15l-0.54,-0.47l-1.5,0.63l-2.01,1.94l-7.12,-2.18l-1.48,-1.63l-1.14,-3.74l-1.45,-1.26l-1.81,-0.26l0.56,-1.18l-0.61,-2.1l-0.72,-0.1l-1.14,1.82l-0.9,0.21l0.63,-0.82l0.36,-1.55l0.92,-1.31l-0.13,-2.34l-0.7,-0.22l-2.0,2.34l-1.51,0.93l-0.94,2.01l-1.35,-0.81l-0.02,-1.52l-1.57,-2.04l-1.09,-0.88l0.24,-0.33l-0.14,-0.59l-3.21,-1.69l-1.83,-0.12l-2.54,-1.35l-4.58,0.28l-6.02,1.9l-2.53,-0.13l-2.62,1.41l-2.13,0.63l-1.49,2.6l-3.49,0.31l-2.29,-0.5l-3.48,0.43l-1.6,1.47l-0.81,-0.04l-2.37,1.63l-3.26,-0.1l-3.72,-2.21l0.04,-1.05l1.19,-0.46l0.49,-0.89l0.21,-2.97l-0.28,-1.64l-1.34,-2.86l-0.38,-1.47l0.05,-1.72l-0.95,-1.7l-0.18,-0.97l-1.01,-0.99l-0.29,-1.98l-1.13,-1.75ZM784.92,393.44l2.65,1.02l3.23,-0.96l1.09,0.14l0.15,3.06l-0.85,1.13l-0.17,1.63l-0.87,-0.24l-1.57,1.91l-1.68,-0.18l-1.4,-2.36l-0.37,-2.04l-1.39,-2.51l0.04,-0.8l1.15,0.18Z" data-code="AU" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M507.76,203.05l0.4,-0.78l0.18,0.4l-0.33,1.03l0.52,0.44l0.68,-0.22l-0.86,3.6l-1.16,-3.32l0.59,-0.74l-0.03,-0.41ZM508.73,200.34l0.37,-1.02l0.64,0.0l0.52,-0.51l-0.49,1.53l-0.56,-0.24l-0.48,0.23Z" data-code="IL" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M623.34,207.03l-1.24,1.04l-0.97,2.55l0.22,0.51l8.04,3.87l3.42,0.37l1.57,1.38l4.92,0.88l2.18,-0.04l0.38,-0.3l0.29,-1.24l-0.32,-1.64l0.14,-0.87l0.82,-0.31l0.45,2.48l2.28,1.02l1.77,-0.38l4.14,0.1l0.38,-0.36l0.18,-1.66l-0.5,-0.65l1.37,-0.29l2.25,-1.99l2.7,-1.62l1.93,0.62l1.8,-0.98l0.79,1.14l-0.68,0.91l0.26,0.63l2.42,0.36l0.09,0.47l-0.83,0.75l0.13,1.07l-1.52,-0.29l-3.24,1.86l-0.13,1.78l-1.32,2.14l-0.18,1.39l-0.93,1.82l-1.64,-0.5l-0.52,0.37l-0.09,2.63l-0.56,1.11l0.19,0.81l-0.53,0.27l-1.18,-3.73l-1.08,-0.27l-0.38,0.31l-0.24,1.0l-0.66,-0.66l0.54,-1.06l1.22,-0.34l1.15,-2.25l-0.24,-0.56l-1.57,-0.47l-4.34,-0.28l-0.18,-1.56l-0.35,-0.35l-1.11,-0.12l-1.91,-1.12l-0.56,0.17l-0.88,1.82l0.11,0.49l1.36,1.07l-1.09,0.69l-0.69,1.11l0.18,0.56l1.24,0.57l-0.32,1.54l0.85,1.94l0.36,2.01l-0.22,0.59l-4.58,0.52l-0.33,0.42l0.13,1.8l-1.17,1.36l-3.65,1.81l-2.79,3.03l-4.32,3.28l-0.18,1.27l-4.65,1.79l-0.77,2.16l0.64,5.3l-1.06,2.49l-0.01,3.94l-1.24,0.28l-1.14,1.93l0.39,0.84l-1.68,0.53l-1.04,1.83l-0.65,0.47l-2.06,-2.05l-2.1,-6.02l-2.2,-3.64l-1.05,-4.75l-2.29,-3.57l-1.76,-8.2l0.01,-3.11l-0.49,-2.53l-0.55,-0.29l-3.53,1.52l-1.53,-0.27l-2.86,-2.77l0.85,-0.67l0.08,-0.55l-0.74,-1.03l-2.67,-2.06l1.24,-1.32l5.34,0.01l0.39,-0.49l-0.5,-2.29l-1.42,-1.46l-0.27,-1.93l-1.43,-1.2l2.31,-2.37l3.05,0.06l2.62,-2.85l1.6,-2.81l2.4,-2.73l0.07,-2.04l1.97,-1.48l-0.02,-0.65l-1.93,-1.31l-0.82,-1.78l-0.8,-2.21l0.9,-0.89l3.59,0.65l2.92,-0.42l2.33,-2.19l2.31,2.85l-0.24,2.13l0.99,1.59l-0.05,0.82l-1.34,-0.28l-0.47,0.48l0.7,3.06l2.62,1.99l2.99,1.65Z" data-code="IN" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M495.56,296.42l2.8,-3.12l-0.02,-0.81l-0.64,-1.3l0.68,-0.52l0.14,-1.47l-0.76,-1.25l0.31,-0.11l2.26,0.03l-0.51,2.76l0.76,1.3l0.5,0.12l1.05,-0.53l1.19,-0.12l0.61,0.24l1.43,-0.62l0.1,-0.67l-0.71,-0.62l1.57,-1.7l8.65,4.86l0.32,1.53l3.34,2.33l-1.05,2.8l0.13,1.61l1.63,1.12l-0.6,1.76l-0.01,2.33l1.89,4.03l0.57,0.43l-1.46,1.08l-2.61,0.94l-1.43,-0.04l-1.06,0.77l-2.29,0.36l-2.87,-0.68l-0.83,0.07l-0.63,-0.75l-0.31,-2.78l-1.32,-1.35l-3.25,-0.77l-3.96,-1.58l-1.18,-2.41l-0.32,-1.75l-1.76,-1.49l0.42,-1.05l-0.44,-0.89l0.08,-0.96l-0.46,-0.58l0.06,-0.56Z" data-code="TZ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M539.29,175.73l1.33,0.32l1.94,-1.8l2.3,3.34l1.43,0.43l-1.26,0.15l-0.35,0.32l-0.8,3.14l-0.99,0.96l0.05,1.11l-1.26,-1.13l0.7,-1.18l-0.04,-0.47l-0.74,-0.86l-1.48,0.15l-2.34,1.71l-0.03,-1.27l-2.03,-1.35l0.47,-0.62l-0.08,-0.56l-1.03,-0.79l0.29,-0.43l-0.14,-0.58l-1.13,-0.86l1.89,0.68l1.69,0.06l0.37,-0.87l-0.81,-1.37l0.42,0.06l1.63,1.72ZM533.78,180.57l0.61,0.46l0.69,-0.0l0.59,1.15l-0.68,-0.15l-1.21,-1.45Z" data-code="AZ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M405.08,135.42l0.35,2.06l-1.75,2.78l-4.22,1.88l-2.84,-0.4l1.73,-3.0l-1.18,-3.53l4.6,-3.74l0.32,1.15l-0.49,1.74l0.4,0.51l1.47,-0.04l1.6,0.6Z" data-code="IE" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M756.47,287.89l0.69,4.01l2.79,1.78l0.51,-0.1l2.04,-2.59l2.71,-1.43l2.05,-0.0l3.9,1.73l2.46,0.45l0.08,15.12l-1.75,-1.54l-2.54,-0.51l-0.88,0.71l-2.32,0.06l0.69,-1.33l1.45,-0.64l0.23,-0.46l-0.65,-2.74l-1.24,-2.21l-5.04,-2.29l-2.09,-0.23l-3.68,-2.27l-0.55,0.13l-0.65,1.07l-0.52,0.12l-0.55,-1.89l-1.21,-0.78l1.84,-0.62l1.72,0.05l0.39,-0.52l-0.21,-0.66l-0.38,-0.28l-3.45,-0.0l-1.13,-1.48l-2.1,-0.43l-0.52,-0.6l2.69,-0.48l1.28,-0.78l3.66,0.94l0.3,0.71ZM757.91,300.34l-0.62,0.82l-0.1,-0.8l0.59,-1.12l0.13,1.1ZM747.38,292.98l0.34,0.72l-1.22,-0.57l-4.68,-0.1l0.27,-0.62l2.78,-0.09l2.52,0.67ZM741.05,285.25l-0.67,-2.88l0.64,-2.01l0.41,0.86l1.21,0.18l0.16,0.7l-0.1,1.68l-0.84,-0.16l-0.46,0.3l-0.34,1.34ZM739.05,293.5l-0.5,0.44l-1.34,-0.36l-0.17,-0.37l1.73,-0.08l0.27,0.36ZM721.45,284.51l-0.19,1.97l2.24,2.23l0.54,0.02l1.27,-1.07l2.75,-0.5l-0.9,1.21l-2.11,0.93l-0.16,0.6l2.22,3.01l-0.3,1.07l1.36,1.74l-2.26,0.85l-0.28,-0.31l0.12,-1.19l-1.64,-1.34l0.17,-2.23l-0.56,-0.39l-1.67,0.76l-0.23,0.39l0.3,6.17l-1.1,0.25l-0.69,-0.47l0.64,-2.21l-0.39,-2.42l-0.39,-0.34l-0.8,-0.01l-0.58,-1.29l0.98,-1.6l0.35,-1.96l1.32,-3.87ZM728.59,296.27l0.38,0.49l-0.02,1.28l-0.88,0.49l-0.53,-0.47l1.04,-1.79ZM729.04,286.98l0.27,-0.05l-0.02,0.13l-0.24,-0.08ZM721.68,284.05l0.16,-0.32l1.89,-1.65l1.83,0.68l3.16,0.35l2.94,-0.1l2.39,-1.66l-1.73,2.13l-1.66,0.43l-2.41,-0.48l-4.17,0.13l-2.39,0.51ZM730.55,310.47l1.11,-1.93l2.03,-0.82l0.08,0.62l-1.45,1.67l-1.77,0.46ZM728.12,305.88l-0.1,0.38l-3.46,0.66l-2.91,-0.27l-0.0,-0.25l1.54,-0.41l1.66,0.73l1.67,-0.19l1.61,-0.65ZM722.9,310.24l-0.64,0.03l-2.26,-1.2l1.11,-0.24l1.78,1.41ZM716.26,305.77l0.88,0.51l1.28,-0.17l0.2,0.35l-4.65,0.73l0.39,-0.67l1.15,-0.02l0.75,-0.73ZM711.66,293.84l-0.38,-0.16l-2.54,1.01l-1.12,-1.44l-1.69,-0.13l-1.16,-0.75l-3.04,0.77l-1.1,-1.15l-3.31,-0.11l-0.35,-3.05l-1.35,-0.95l-1.11,-1.98l-0.33,-2.06l0.27,-2.14l0.9,-1.01l0.37,1.15l2.09,1.49l1.53,-0.48l1.82,0.08l1.38,-1.19l1.0,-0.18l2.28,0.67l2.26,-0.53l1.52,-3.64l1.01,-0.99l0.78,-2.57l4.1,0.3l-1.11,1.77l0.02,0.46l1.7,2.2l-0.23,1.39l2.07,1.71l-2.33,0.42l-0.88,1.9l0.1,2.05l-2.4,1.9l-0.06,2.45l-0.7,2.79ZM692.58,302.03l0.35,0.26l4.8,0.25l0.78,-0.97l4.17,1.09l1.13,1.68l3.69,0.45l2.13,1.04l-1.8,0.6l-2.77,-0.99l-4.8,-0.12l-5.24,-1.41l-1.84,-0.25l-1.11,0.3l-4.26,-0.97l-0.7,-1.14l-1.59,-0.13l1.18,-1.65l2.74,0.13l2.87,1.13l0.26,0.68ZM685.53,299.17l-2.22,0.04l-2.06,-2.03l-3.15,-2.01l-2.93,-3.51l-3.11,-5.33l-2.2,-2.12l-1.64,-4.06l-2.32,-1.69l-1.27,-2.07l-1.96,-1.5l-2.51,-2.65l-0.11,-0.66l4.81,0.53l2.15,2.38l3.31,2.74l2.35,2.66l2.7,0.17l1.95,1.59l1.54,2.17l1.59,0.95l-0.84,1.71l0.15,0.52l1.44,0.87l0.79,0.1l0.4,1.58l0.87,1.4l1.96,0.39l1.0,1.31l-0.6,3.01l-0.09,3.5Z" data-code="ID" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M492.5,162.44l1.28,-2.49l1.82,0.19l0.66,-0.23l0.09,-0.71l-0.25,-0.75l-0.79,-0.72l-0.33,-1.21l-0.86,-0.62l-0.02,-1.19l-1.13,-0.86l-1.15,-0.19l-2.04,-1.0l-1.66,0.32l-0.66,0.47l-0.92,-0.0l-0.84,0.78l-2.48,0.7l-1.18,-0.71l-3.07,-0.36l-0.89,0.43l-0.24,-0.55l-1.11,-0.7l0.35,-0.93l1.26,-1.02l-0.54,-1.23l2.04,-2.43l1.4,-0.62l0.25,-1.19l-1.04,-2.39l0.83,-0.13l1.28,-0.84l1.8,-0.07l2.47,0.26l2.86,0.81l1.88,0.06l0.86,0.44l1.04,-0.41l0.77,0.66l2.18,-0.15l0.92,0.3l0.52,-0.34l0.15,-1.53l0.56,-0.54l2.85,-0.05l0.84,-0.72l3.04,-0.18l1.23,1.46l-0.48,0.77l0.21,1.03l0.36,0.32l1.8,0.14l0.93,2.08l3.18,1.15l1.94,-0.45l1.67,1.49l1.4,-0.03l3.35,0.96l0.02,0.54l-0.96,1.59l0.47,1.97l-0.26,0.7l-2.36,0.28l-1.29,0.89l-0.23,1.38l-1.83,0.27l-1.58,0.97l-2.41,0.21l-2.16,1.17l-0.21,0.38l0.34,2.26l1.23,0.75l2.13,-0.08l-0.14,0.31l-2.65,0.53l-3.23,1.69l-0.87,-0.39l0.42,-1.1l-0.25,-0.52l-2.21,-0.73l2.35,-1.06l0.12,-0.65l-0.93,-0.82l-3.62,-0.74l-0.13,-0.89l-0.46,-0.34l-2.61,0.59l-0.91,1.69l-1.71,2.04l-0.86,-0.4l-1.62,0.27Z" data-code="UA" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M549.33,221.64l-0.76,-0.23l-0.14,-1.64l0.84,-1.29l0.47,0.52l0.04,1.34l-0.45,1.3Z" data-code="QA" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                            <path d="M508.58,318.75l-0.34,-2.57l0.51,-2.05l3.55,0.63l2.5,-0.38l1.02,-0.76l1.49,0.01l2.74,-0.98l1.66,-1.2l0.5,9.24l0.41,1.23l-0.68,1.67l-0.93,1.71l-1.5,1.5l-5.16,2.28l-2.78,2.73l-1.02,0.53l-1.71,1.8l-0.98,0.57l-0.35,2.41l1.16,1.94l0.49,2.17l0.43,0.31l-0.06,2.06l-0.39,1.17l0.5,0.72l-0.25,0.73l-0.92,0.83l-5.12,2.39l-1.22,1.36l0.21,1.13l0.58,0.39l-0.11,0.72l-1.22,-0.01l-0.73,-2.97l0.42,-3.09l-1.78,-5.37l2.49,-2.81l0.69,-1.89l0.44,-0.43l0.28,-1.53l-0.39,-0.93l0.59,-3.65l-0.01,-3.26l-1.49,-1.16l-1.2,-0.22l-1.74,-1.17l-1.92,0.01l-0.29,-2.08l7.06,-1.96l1.28,1.09l0.89,-0.1l0.67,0.44l0.1,0.73l-0.51,1.29l0.19,1.81l1.75,1.83l0.65,-0.13l0.71,-1.65l1.17,-0.86l-0.26,-3.47l-1.05,-1.85l-1.04,-0.94Z" data-code="MZ" fill="#673ab7" fill-opacity="1" stroke="none" stroke-width="0" stroke-opacity="1" fill-rule="evenodd" class="jvectormap-region jvectormap-element"></path>
                                        </g>
                                        <g></g>
                                        <g>
                                            <circle data-index="0" cx="558.9374102388724" cy="178.62904115192083" fill="#fff" stroke="#000" fill-opacity="1" stroke-width="5" stroke-opacity="0.4" r="9" class="jvectormap-marker jvectormap-element"></circle>
                                        </g>
                                        <g></g>
                                    </svg>
                                    <div class="jvectormap-zoomin">+</div>
                                    <div class="jvectormap-zoomout">−</div>
                                    <div class="jvectormap-legend-cnt jvectormap-legend-cnt-h"></div>
                                    <div class="jvectormap-legend-cnt jvectormap-legend-cnt-v"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-4">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-lg-flex align-items-center mb-4">
                                <div>
                                    <h5 class="mb-0">Top countries</h5>
                                </div>
                                <div class="ms-auto">
                                    <h3 class="mb-0"><span class="font-14">Total Visits:</span> 9587</h3>
                                </div>
                            </div>
                            <hr>
                            <div class="dashboard-top-countries ps ps--active-y">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="font-20"><i class="flag-icon flag-icon-in"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">India</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">647</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="font-20"><i class="flag-icon flag-icon-us"></i>
                                            </div>
                                            <div class="media-body ml-2">
                                                <h6 class="mb-0">United States</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">435</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="font-20"><i class="flag-icon flag-icon-vn"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Vietnam</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">287</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="font-20"><i class="flag-icon flag-icon-au"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Australia</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">432</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="font-20"><i class="flag-icon flag-icon-dz"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Angola</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">345</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="font-20"><i class="flag-icon flag-icon-ax"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Aland Islands</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">134</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="font-20"><i class="flag-icon flag-icon-ar"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Argentina</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">147</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="font-20"><i class="flag-icon flag-icon-be"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-0">Belgium</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto">210</div>
                                    </li>
                                </ul>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; height: 322px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 276px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col d-flex">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="card-title">
                                <h5 class="mb-0">Browser Statistics </h5>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center gap-3">
                                <div>
                                    <img src="assets/images/icons/chrome.png" width="35" height="35" alt="">
                                </div>
                                <div class="">
                                    <h6 class="mb-0">587</h6>
                                    <p class="mb-0">Chrome</p>
                                </div>
                                <p class="mb-0 ms-auto">24.3%</p>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center gap-3">
                                <div>
                                    <img src="assets/images/icons/firefox.png" width="35" height="35" alt="">
                                </div>
                                <div class="">
                                    <h6 class="mb-0">358</h6>
                                    <p class="mb-0">Firefox</p>
                                </div>
                                <p class="mb-0 ms-auto">12.3%</p>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center gap-3">
                                <div>
                                    <img src="assets/images/icons/edge.png" width="35" height="35" alt="">
                                </div>
                                <div class="">
                                    <h6 class="mb-0">867</h6>
                                    <p class="mb-0">Edge</p>
                                </div>
                                <p class="mb-0 ms-auto">24.3%</p>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center gap-3">
                                <div>
                                    <img src="assets/images/icons/opera.png" width="35" height="35" alt="">
                                </div>
                                <div class="">
                                    <h6 class="mb-0">752</h6>
                                    <p class="mb-0">Opera</p>
                                </div>
                                <p class="mb-0 ms-auto">27.3%</p>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center gap-3">
                                <div>
                                    <img src="assets/images/icons/safari.png" width="35" height="35" alt="">
                                </div>
                                <div class="">
                                    <h6 class="mb-0">586</h6>
                                    <p class="mb-0">Safari</p>
                                </div>
                                <p class="mb-0 ms-auto">14.5%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card radius-15 w-100">
                        <div class="card-body">
                            <div class="card-title">
                                <h5 class="mb-0">Traffic Sources </h5>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Source</th>
                                            <th>Visitors</th>
                                            <th>Bounce Rate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>(direct)</td>
                                            <td>56</td>
                                            <td>10%</td>
                                        </tr>
                                        <tr>
                                            <td>google</td>
                                            <td>29</td>
                                            <td>12%</td>
                                        </tr>
                                        <tr>
                                            <td>linkedin.com</td>
                                            <td>68</td>
                                            <td>33%</td>
                                        </tr>
                                        <tr>
                                            <td>bing</td>
                                            <td>14</td>
                                            <td>24%</td>
                                        </tr>
                                        <tr>
                                            <td>facebook.com</td>
                                            <td>87</td>
                                            <td>22%</td>
                                        </tr>
                                        <tr>
                                            <td>twitter.com</td>
                                            <td>88</td>
                                            <td>43%</td>
                                        </tr>
                                        <tr>
                                            <td>other</td>
                                            <td>98</td>
                                            <td>27%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card radius-15 w-100">
                        <div class="card-body" style="position: relative;">
                            <div class="card-title">
                                <h5 class="mb-0">Visitors By Gender </h5>
                            </div>
                            <hr>
                            <div id="chart6" style="min-height: 327.7px;">
                                <div id="apexchartskq30sa31" class="apexcharts-canvas apexchartskq30sa31 apexcharts-theme-light" style="width: 402px; height: 327.7px;"><svg id="SvgjsSvg1259" width="402" height="327.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <foreignObject x="0" y="0" width="402" height="327.7">
                                            <div class="apexcharts-legend apexcharts-align-center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 5px; position: absolute;">
                                                <div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(25, 143, 237); color: rgb(25, 143, 237); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Male" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Male</span></div>
                                                <div class="apexcharts-legend-series" rel="2" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(103, 58, 183); color: rgb(103, 58, 183); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Female" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Female</span></div>
                                                <div class="apexcharts-legend-series" rel="3" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(255, 193, 7); color: rgb(255, 193, 7); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Others" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Others</span></div>
                                            </div>
                                            <style type="text/css">
                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }

                                                .apexcharts-legend.position-bottom,
                                                .apexcharts-legend.position-top {
                                                    flex-wrap: wrap
                                                }

                                                .apexcharts-legend.position-right,
                                                .apexcharts-legend.position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }

                                                .apexcharts-legend.position-bottom.apexcharts-align-left,
                                                .apexcharts-legend.position-top.apexcharts-align-left,
                                                .apexcharts-legend.position-right,
                                                .apexcharts-legend.position-left {
                                                    justify-content: flex-start;
                                                }

                                                .apexcharts-legend.position-bottom.apexcharts-align-center,
                                                .apexcharts-legend.position-top.apexcharts-align-center {
                                                    justify-content: center;
                                                }

                                                .apexcharts-legend.position-bottom.apexcharts-align-right,
                                                .apexcharts-legend.position-top.apexcharts-align-right {
                                                    justify-content: flex-end;
                                                }

                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                }

                                                .apexcharts-legend.position-bottom .apexcharts-legend-series,
                                                .apexcharts-legend.position-top .apexcharts-legend-series {
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }

                                                .apexcharts-legend-text *,
                                                .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }

                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: inline-block;
                                                    cursor: pointer;
                                                    margin-right: 3px;
                                                    border-style: solid;
                                                }

                                                .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                    display: inline-block;
                                                }

                                                .apexcharts-legend-series.apexcharts-no-click {
                                                    cursor: auto;
                                                }

                                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                                .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }

                                                .apexcharts-inactive-legend {
                                                    opacity: 0.45;
                                                }
                                            </style>
                                        </foreignObject>
                                        <g id="SvgjsG1261" class="apexcharts-inner apexcharts-graphical" transform="translate(57.5, 0)">
                                            <defs id="SvgjsDefs1260">
                                                <clipPath id="gridRectMaskkq30sa31">
                                                    <rect id="SvgjsRect1263" width="295" height="303" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskkq30sa31">
                                                    <rect id="SvgjsRect1264" width="293" height="305" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <filter id="SvgjsFilter1272" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood1273" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1273Out" in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite1274" in="SvgjsFeFlood1273Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1274Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset1275" dx="1" dy="1" result="SvgjsFeOffset1275Out" in="SvgjsFeComposite1274Out"></feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur1276" stdDeviation="1 " result="SvgjsFeGaussianBlur1276Out" in="SvgjsFeOffset1275Out"></feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge1277" result="SvgjsFeMerge1277Out" in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode1278" in="SvgjsFeGaussianBlur1276Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode1279" in="[object Arguments]"></feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend1280" in="SourceGraphic" in2="SvgjsFeMerge1277Out" mode="normal" result="SvgjsFeBlend1280Out"></feBlend>
                                                </filter>
                                                <filter id="SvgjsFilter1284" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood1285" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1285Out" in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite1286" in="SvgjsFeFlood1285Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1286Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset1287" dx="1" dy="1" result="SvgjsFeOffset1287Out" in="SvgjsFeComposite1286Out"></feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur1288" stdDeviation="1 " result="SvgjsFeGaussianBlur1288Out" in="SvgjsFeOffset1287Out"></feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge1289" result="SvgjsFeMerge1289Out" in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode1290" in="SvgjsFeGaussianBlur1288Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode1291" in="[object Arguments]"></feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend1292" in="SourceGraphic" in2="SvgjsFeMerge1289Out" mode="normal" result="SvgjsFeBlend1292Out"></feBlend>
                                                </filter>
                                                <filter id="SvgjsFilter1296" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood1297" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1297Out" in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite1298" in="SvgjsFeFlood1297Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1298Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset1299" dx="1" dy="1" result="SvgjsFeOffset1299Out" in="SvgjsFeComposite1298Out"></feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur1300" stdDeviation="1 " result="SvgjsFeGaussianBlur1300Out" in="SvgjsFeOffset1299Out"></feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge1301" result="SvgjsFeMerge1301Out" in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode1302" in="SvgjsFeGaussianBlur1300Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode1303" in="[object Arguments]"></feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend1304" in="SourceGraphic" in2="SvgjsFeMerge1301Out" mode="normal" result="SvgjsFeBlend1304Out"></feBlend>
                                                </filter>
                                            </defs>
                                            <g id="SvgjsG1266" class="apexcharts-pie">
                                                <g id="SvgjsG1267" transform="translate(14.449999999999989, 15.049999999999983) scale(0.9)">
                                                    <g id="SvgjsG1268" class="apexcharts-slices">
                                                        <g id="SvgjsG1269" class="apexcharts-series apexcharts-pie-series" seriesName="Male" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1270" d="M 144.5 9.67073170731706 A 140.82926829268294 140.82926829268294 0 0 1 285.32926829268297 150.5 L 144.5 150.5 L 144.5 9.67073170731706" fill="rgba(25,143,237,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-pie-slice-0" index="0" j="0" data:angle="90" data:startAngle="0" data:strokeWidth="2" data:value="25" data:pathOrig="M 144.5 9.67073170731706 A 140.82926829268294 140.82926829268294 0 0 1 285.32926829268297 150.5 L 144.5 150.5 L 144.5 9.67073170731706" stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1281" class="apexcharts-series apexcharts-pie-series" seriesName="Female" rel="2" data:realIndex="1">
                                                            <path id="SvgjsPath1282" d="M 285.32926829268297 150.5 A 140.82926829268294 140.82926829268294 0 1 1 61.72263300642095 36.56672864583058 L 144.5 150.5 L 285.32926829268297 150.5" fill="rgba(103,58,183,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-pie-slice-1" index="0" j="1" data:angle="234" data:startAngle="90" data:strokeWidth="2" data:value="65" data:pathOrig="M 285.32926829268297 150.5 A 140.82926829268294 140.82926829268294 0 1 1 61.72263300642095 36.56672864583058 L 144.5 150.5 L 285.32926829268297 150.5" stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1293" class="apexcharts-series apexcharts-pie-series" seriesName="Others" rel="3" data:realIndex="2">
                                                            <path id="SvgjsPath1294" d="M 61.72263300642095 36.56672864583058 A 140.82926829268294 140.82926829268294 0 0 1 144.47542065597594 9.67073385226945 L 144.5 150.5 L 61.72263300642095 36.56672864583058" fill="rgba(255,193,7,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-pie-slice-2" index="0" j="2" data:angle="36" data:startAngle="324" data:strokeWidth="2" data:value="10" data:pathOrig="M 61.72263300642095 36.56672864583058 A 140.82926829268294 140.82926829268294 0 0 1 144.47542065597594 9.67073385226945 L 144.5 150.5 L 61.72263300642095 36.56672864583058" stroke="#ffffff"></path>
                                                        </g><text id="SvgjsText1271" font-family="Helvetica, Arial, sans-serif" x="224.1650644794366" y="70.8349355205634" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter1272)" style="font-family: Helvetica, Arial, sans-serif;">25.0%</text><text id="SvgjsText1283" font-family="Helvetica, Arial, sans-serif" x="93.35188008788013" y="250.88383747636362" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter1284)" style="font-family: Helvetica, Arial, sans-serif;">65.0%</text><text id="SvgjsText1295" font-family="Helvetica, Arial, sans-serif" x="109.68509023373761" y="43.35072536413236" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter1296)" style="font-family: Helvetica, Arial, sans-serif;">10.0%</text>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1305" x1="0" y1="0" x2="289" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1306" x1="0" y1="0" x2="289" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1262" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                        <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(25, 143, 237);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(103, 58, 183);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 193, 7);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 435px; height: 423px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->


            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h5 class="mb-0">Top pages by views </h5>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Views</th>
                                    <th>Avg. Time</th>
                                    <th>Bounce Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="https://themeforest.net/item/synadmin-bootstrap4-admin-template/29014766" target="_blank">https://themeforest.net/item/synadmin-bootstrap4-admin-template/29014766</a>
                                    </td>
                                    <td>660</td>
                                    <td>55s</td>
                                    <td>3.6%</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="https://codervent.com/wipe-admin-dark/dashboard/v3" target="_blank">https://codervent.com/wipe-admin-dark/dashboard/v3</a>
                                    </td>
                                    <td>352</td>
                                    <td>16s</td>
                                    <td>8.4%</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="https://themeforest.net/item/dashtreme-multipurpose-bootstrap4-admin-template/23059455" target="_blank">https://themeforest.net/item/dashtreme-multipurpose-bootstrap4-admin-template/23059455</a>
                                    </td>
                                    <td>101</td>
                                    <td>10s</td>
                                    <td>6.7%</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="https://themeforest.net/item/rukada-responsive-bootstrap-4-admin-template/22820477" target="_blank">https://themeforest.net/item/rukada-responsive-bootstrap-4-admin-template/22820477</a>
                                    </td>
                                    <td>95</td>
                                    <td>57s</td>
                                    <td>5.2%</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><a href="https://codervent.com/rocker-angular/dashboard/v1" target="_blank">https://codervent.com/rocker-angular/dashboard/v1</a>
                                    </td>
                                    <td>102</td>
                                    <td>45s</td>
                                    <td>7.2%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
@endsection

@push('scripts')
@endpush