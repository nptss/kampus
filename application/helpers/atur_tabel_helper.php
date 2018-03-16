<?php
defined('BASEPATH')or exit('Keluar');

function set_tabel_template(){
    $ci= & get_instance();
    $template = array(
            'table_open'            => '<table class="table table-bordered table-striped table-hover js-exportable">',

            'thead_open'            => '<thead>',
            'thead_close'           => '</thead>',

            'heading_row_start'     => '<tr>',
            'heading_row_end'       => '</tr>',
            'heading_cell_start'    => '<th>',
            'heading_cell_end'      => '</th>',

            'tbody_open'            => '<tbody>',
            'tbody_close'           => '</tbody>',

            'row_start'             => '<tr>',
            'row_end'               => '</tr>',
            'cell_start'            => '<td  class="text-center">',
            'cell_end'              => '</td>',

            'row_alt_start'         => '<tr>',
            'row_alt_end'           => '</tr>',
            'cell_alt_start'        => '<td  class="text-center">',
            'cell_alt_end'          => '</td>',

            'table_close'           => '</table>'
    );

    $ci->table->set_template($template);
}
 ?>
