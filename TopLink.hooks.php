<?php

class TopLinkHooks {
    public static function onSkinAddFooterLinks( Skin $skin, string $key, array &$footerlinks ) {
        if ( $key === 'places' ) {
            $footerlinks['toplink'] = Html::element( 'a', [ 'href' => '#' ],
                $skin->msg( 'totop' )->text() );
        }
    }
}
