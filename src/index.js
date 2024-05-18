import "./index.css"

wp.blocks.registerBlockType("jjcmc/screen-size-responsive-menu", {
    title: "Screen-Size Responsive Menu",
    icon: "menu",
    category: "common",
    edit: function(props){
        return(
            <>
            <input type="checkbox" id="side-menu" className="side-menu"/>
            <label className="menu-label" for="side-menu"></label>
            <nav className="responsive-nav">
                <p>menu</p>
            </nav>
            </>
        )
    },
    save: function(props) {
        return null
    }
})