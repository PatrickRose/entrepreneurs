{{  Navbar::create(array('role'=>'navigation'), Navbar::FIX_TOP)
  ->with_brand('SheffEnt', url(''))
  ->with_menus(
      Navigation::links(ShefEnt\Helpers::get_links()
                        ))
  ->collapsible() }}
