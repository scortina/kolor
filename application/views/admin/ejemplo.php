<script>
    $(function(){
        <?php
            $ventas=0;
            $x  = 0;
            echo 'var visitors = [';
            foreach ($estadisticas->result() as $rows){
                if($x == 0 ){
                   echo '["'.$rows->fecha_origen.'", '.$rows->total.']';
                }else{
                   echo ',["'.$rows->fecha_origen.'", '.$rows->total.']'; 
                }
                $x++;
            }
            echo '];';
            
            $mess = array("ENE","FEB","MAR","ABR","MAY","JUN","JUL","AGO","SEPT","OCT","NOV","DIC");
            echo 'var data1 = [';
            foreach ($estadisticas->result() as $rows){
                if($x == 0 ){
                   echo '["'.$mess[$rows->mes-1].'", '.$rows->total.']';
                }else{
                   echo ',["'.$mess[$rows->mes-1].'", '.$rows->total.']'; 
                }
                $x++;
            }
            echo '];';
        ?>
        if ($('#site_statistics').size() != 0) {

            $('#site_statistics_loading').hide();
            $('#site_statistics_content').show();

            var plot_statistics = $.plot($("#site_statistics"),
                [{
                    data: visitors,
                    lines: {
                        fill: 0.6,
                        lineWidth: 0
                    },
                    color: ['#f89f9f']
                }, {
                    data: visitors,
                    points: {
                        show: true,
                        fill: true,
                        radius: 5,
                        fillColor: "#f89f9f",
                        lineWidth: 3
                    },
                    color: '#fff',
                    shadowSize: 0
                }],

                {
                    xaxis: {
                        tickLength: 0,
                        tickDecimals: 0,
                        mode: "categories",
                        min: 0,
                        font: {
                            lineHeight: 14,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    yaxis: {
                        ticks: 5,
                        tickDecimals: 0,
                        tickColor: "#eee",
                        font: {
                            lineHeight: 14,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: "#eee",
                        borderColor: "#eee",
                        borderWidth: 1
                    }
                });
        }
        if ($('#site_activities').size() != 0) {
            //site activities
            var previousPoint2 = null;
            $('#site_activities_loading').hide();
            $('#site_activities_content').show();
            
            var plot_statistics = $.plot($("#site_activities"),

                [{
                    data: data1,
                    lines: {
                        fill: 0.2,
                        lineWidth: 0,
                    },
                    color: ['#BAD9F5']
                }, {
                    data: data1,
                    points: {
                        show: true,
                        fill: true,
                        radius: 4,
                        fillColor: "#9ACAE6",
                        lineWidth: 2
                    },
                    color: '#9ACAE6',
                    shadowSize: 1
                }, {
                    data: data1,
                    lines: {
                        show: true,
                        fill: false,
                        lineWidth: 3
                    },
                    color: '#9ACAE6',
                    shadowSize: 0
                }],

                {

                    xaxis: {
                        tickLength: 0,
                        tickDecimals: 0,
                        mode: "categories",
                        min: 0,
                        font: {
                            lineHeight: 18,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    yaxis: {
                        ticks: 5,
                        tickDecimals: 0,
                        tickColor: "#eee",
                        font: {
                            lineHeight: 14,
                            style: "normal",
                            variant: "small-caps",
                            color: "#6F7B8A"
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: "#eee",
                        borderColor: "#eee",
                        borderWidth: 1
                    }
                });

            
        }
        ////////////////////////////////////////////////////////////////////////
        <?php  
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 
            echo "$('.purple-wisteria .portlet-body .row').html('";
            foreach ($estads_mes->result() as $row_mes){
                if( (round($row_mes->suma/20) >= '0') && (round($row_mes->suma/20) <= '30')){
                    echo '<div class="col-md-4">\n\
                            <div class="easy-pie-chart">\n\
                                    <div class="number bounce" data-percent="'.  round($row_mes->suma/20).'">\n\
                                            <span>+'.  round($row_mes->suma/20).'</span>%\n\
                                    </div>\n\
                                    <a class="title" href="#"> '.$meses[$row_mes->mes-1].' </a>\n\
                            </div>\n\
                         </div>';
                }else if( round($row_mes->suma/20) <= '60'){
                    echo '<div class="col-md-4">\n\
                            <div class="easy-pie-chart">\n\
                                    <div class="number transactions" data-percent="'.  round($row_mes->suma/20).'">\n\
                                            <span>+'.  round($row_mes->suma/20).'</span>%\n\
                                    </div>\n\
                                    <a class="title" href="#"> '.$meses[$row_mes->mes-1].' </a>\n\
                            </div>\n\
                         </div>';
                }else if( round($row_mes->suma/20) <= '100'){
                    echo '<div class="col-md-4">\n\
                            <div class="easy-pie-chart">\n\
                                    <div class="number visits" data-percent="'.  round($row_mes->suma/20).'">\n\
                                            <span>+'.  round($row_mes->suma/20).'</span>%\n\
                                    </div>\n\
                                    <a class="title" href="#"> '.$meses[$row_mes->mes-1].' </a>\n\
                            </div>\n\
                         </div>';
                }   
            }
            echo "');";
        ?> 
        
        $('.easy-pie-chart .number.transactions').easyPieChart({
            animate: 1000,
            size: 75,
            lineWidth: 3,
            barColor: Metronic.getBrandColor('yellow')
        });
        $('.easy-pie-chart .number.visits').easyPieChart({
            animate: 1000,
            size: 75,
            lineWidth: 3,
            barColor: Metronic.getBrandColor('green')
        });

        $('.easy-pie-chart .number.bounce').easyPieChart({
            animate: 1000,
            size: 75,
            lineWidth: 3,
            barColor: Metronic.getBrandColor('red')
        });
        
        
        
        ////////////////////////////////////////////////////////////////////////
        <?php 
            $y  = 0;
            echo 'var data = [';
            foreach ($estadisticas->result() as $rows){
                if($y == 0 ){
                   echo '['.$rows->total.']';
                }else{
                   echo ',['.$rows->total.']'; 
                }
                $y++;
            }
            echo '];';
        ?>
        $("#sparkline_bar").sparkline(data, {
            type: 'bar',
            width: '100',
            barWidth: 5,
            height: '55',
            barColor: '#35aa47',
            negBarColor: '#e02222'
        });
    });
    
</script>

</body>
<!-- END BODY -->
</html>