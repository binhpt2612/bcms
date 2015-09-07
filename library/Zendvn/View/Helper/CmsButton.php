<?php

class Zendvn_View_Helper_CmsButton extends Zend_View_Helper_Abstract {

    public function cmsButton($name = null, $class = null, $link = '#', $type = 'link') {
        if ($type == 'link') {
            $atag = 'href="' . $link . '"';
        } else {
            $atag = 'href="#" onclick="OnSubmitForm(\'' . $link . '\')"';
        }
        $xhtml = '<a ' . $atag . '  class="btn btn-app pull-right" >
                        <i class="' . $class . '"></i> ' . $name . '
                </a>';

        return $xhtml;
    }

}
