import React, {Components} from "react";
import { Link } from "react-router-dom";
import Nav from 'react-bootstrap/Nav';

const Head = () => {
    return(
        // <div>
        //     <Link to="">Home</Link>
        //     <Link to="/profile">Profile</Link>
        //     <Link to="/contact">Contact</Link>
        //     <Link to="/color">Color State</Link>
        //     <Link to="/effect">Effect State</Link>
        //     <Link to="/posts">All Posts</Link>
        //     <Link to="/products">All Products</Link>
        //     <Link to="/login">Login</Link>
        //     <Link to="/logout">LogOut</Link>
        // </div>

        <Nav>
        <Nav.Item>
        <Nav.Link href="/">Home</Nav.Link>
        </Nav.Item>
        <Nav.Item>
        <Nav.Link href="/profile">Profile</Nav.Link>
        </Nav.Item>
        <Nav.Item>
        <Nav.Link href="/contact">Contact</Nav.Link>
        </Nav.Item>
        <Nav.Item>
        <Nav.Link href="/color">Color State</Nav.Link>
        </Nav.Item>
        <Nav.Item>
        <Nav.Link href="/effect">Effect State</Nav.Link>
        </Nav.Item>
        <Nav.Item>
        <Nav.Link href="/posts">All Posts</Nav.Link>
        </Nav.Item>
        <Nav.Item>
        <Nav.Link href="/products">All Products</Nav.Link>
        </Nav.Item>
        <Nav.Item>
        <Nav.Link href="/login">Login</Nav.Link>
        </Nav.Item>
        <Nav.Item>
        <Nav.Link href="/logout">LogOut</Nav.Link>
        </Nav.Item>
        </Nav>
    )
}
export default Head;