import React, {useState, userEffect} from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import Card from 'react-bootstrap/Card';

const Login = ()=>{
    let[token, setToken]= useState("");
    let[name, setName] = useState("");
    let[password, setPassword] =useState("");
    const navigate = useNavigate();

    const loginSubmit= ()=>{
        var obj = {username: name, password: password};
        // alert (obj.username);
        axios.post("http://127.0.0.1:8000/api/login",obj)
        .then(resp=>{
            alert (resp.data.msg);
            var token = resp.data.token;
            console.log(token);
            var user = {userId: token.userid, access_token:token.token};
            localStorage.setItem('user',JSON.stringify(user));
            console.log(localStorage.getItem('user'));

            
            if (token == "No user found"){
                navigate('/login');
            }
            else{
                navigate('/products')
            }
            
        }).catch(err=>{
            console.log(err);
        });


    }
    return(
        


        <Card style={{ width: '20rem' }}>
            <Card.Body>
                <Form>
                    <Form.Group className="mb-3" >
                        <Form.Label>Name </Form.Label>
                        <Form.Control type="text"  value={name} onChange={(e)=>setName(e.target.value)} />
                    </Form.Group>

                    <Form.Group className="mb-3" >
                        <Form.Label>Password</Form.Label>
                        <Form.Control type="password" value={password} onChange={(e)=>setPassword(e.target.value)} />
                    </Form.Group>
                    <Button variant="primary" onClick={loginSubmit}>
                        Login
                    </Button>
                </Form>
            </Card.Body>
        </Card>
        

    )
}
export default Login;  