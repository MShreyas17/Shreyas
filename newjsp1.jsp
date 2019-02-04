<%-- 
    Document   : newjsp1
    Created on : Feb 2, 2019, 12:43:06 AM
    Author     : Dell
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <body>
        <%
       String a=request.getParameter("uname");
       String b=request.getParameter("psw");
       if(a.equals("shreyas") && b.equals("shreyas1"))
       {
        response.sendRedirect("index.php");
        }
        else
        {
         response.sendRedirect("index.html");
         }
         %>
    </body>
</html>
