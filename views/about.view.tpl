<h1> ficha de desarrollo </h1>
<section>
    <h2>{{cuenta}} {{nombre}}</h2>
    <em> correo: {{correo}}</em>
</section>
<section>
    <h2> proyectos</h2>
        <table>
            <tr>
                <td>
                    codigo
                </td>
                <td>
                    proyecto
                </td>
            </tr>
            {{foreach proyectos}}
            <tr>
                <td>
                {{id}}
                </td>

                <td>
                {{name}}
                </td>
            </tr>
            {{endfor proyectos}}
        
        </table>
</section>