
//npm i bootstrap reactstrap axios sweetalert
import React, { useState, useEffect } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import { Modal, ModalBody, ModalFooter, ModalHeader } from 'reactstrap';
import axios from 'axios';
//libreria para mejorar los alert   https://sweetalert.js.org/guides/
//npm install sweetalert --save
import swal from 'sweetalert';
function CRUD() {
  //direccion de la API
  const baseUrl = "http://localhost:5000/vacunas";
  const [data, setData] = useState([]);
  const [modalInsertar, setModalInsertar] = useState(false);
  const [modalEditar, setModalEditar] = useState(false);
  const [modalEliminar, setModalEliminar] = useState(false);
  const [frameworkSeleccionado, setFrameworkSeleccionado] = useState({
    id: '',
    comunidad: '',
    pzifer: '',
    moderna: '',
    dosis_administradas: '',
    pauta_completa: '',
    fecha_ult_vacuna: ''

  });

  const handleChange = e => {
    const { name, value } = e.target;
    setFrameworkSeleccionado((prevState) => ({
      ...prevState,
      [name]: value
    }))
    console.log(frameworkSeleccionado);
  }

  const abrirCerrarModalInsertar = () => {
    setModalInsertar(!modalInsertar);
  }

  const abrirCerrarModalEditar = () => {
    setModalEditar(!modalEditar);
  }

  const abrirCerrarModalEliminar = () => {
    setModalEliminar(!modalEliminar);
  }

  const peticionGet = async () => {


    await axios.get(baseUrl)
      .then(response => {
        setData(response.data);
        //console.log(response.data);
      }).catch(error => {
        console.log(error);
      })
  }//peticionGet

  const peticionPost = async () => {
    const vacuna = {
      comunidad: frameworkSeleccionado.comunidad,
      pzifer: frameworkSeleccionado.pzifer,
      moderna: frameworkSeleccionado.moderna,
      dosis_administradas: frameworkSeleccionado.dosis_administradas,
      pauta_completa: frameworkSeleccionado.pauta_completa,
      fecha_ult_vacuna: frameworkSeleccionado.fecha_ult_vacuna
    };

    await axios.post(baseUrl + "insertar/", vacuna)
      .then(response => {

        //cerramos la ventana modal
        abrirCerrarModalInsertar();
        //refresco la tabla haciendo una peticion get
        peticionGet();

      }).catch(error => {
        console.log(error);
      })
  }//peticionPost

  const peticionPut = async () => {


    const vacuna = {
      comunidad: frameworkSeleccionado.comunidad,
      pzifer: frameworkSeleccionado.pzifer,
      moderna: frameworkSeleccionado.moderna,
      dosis_administradas: frameworkSeleccionado.dosis_administradas,
      pauta_completa: frameworkSeleccionado.pauta_completa,
      fecha_ult_vacuna: frameworkSeleccionado.fecha_ult_vacuna
    };
    await axios.put(baseUrl + "modificar/" + frameworkSeleccionado.id, vacuna)
      .then(response => {
        if (response.data != null) {
          //swal("Good job!", "You clicked the button!", "success"); 
          swal("Buen trabajo!", "Registro Modificado Satisfactoriamente", "success");

          abrirCerrarModalEditar();
          //refresco la tabla haciendo una peticion delete
          peticionGet();
        }

      }).catch(error => {
        console.log(error);
      })
  }//peticionPut

  const peticionDelete = async () => {

    axios.delete(baseUrl + "borrar/" + frameworkSeleccionado.id).then(response => {
      if (response.data != null) {
        swal("Buen trabajo!", "Registro Borrado Satisfactoriamente", "success");
        abrirCerrarModalEliminar();
        //refresco la tabla haciendo una peticion delete
        peticionGet();
      }


    }).catch(error => {
      console.log(error);

    })
  }//peticionDelete

  const seleccionarFramework = (framework, caso) => {
    setFrameworkSeleccionado(framework);

    (caso === "Editar") ?
      abrirCerrarModalEditar() :
      abrirCerrarModalEliminar()
  }

  useEffect(() => {
    peticionGet();
  }, [])

  return (
    <div style={{ textAlign: 'center' }}>
      <br />
      <button className="btn btn-success" onClick={() => abrirCerrarModalInsertar()}>Insertar</button>
      <br /><br />
      <table className="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Comunidad</th>
            <th>Pzifer</th>
            <th>Moderna</th>
            <th>Dosis administradas</th>
            <th>Pautas completas</th>
            <th>Fecha de última vacunación</th>
          </tr>
        </thead>
        <tbody>
          {console.log(data[0])}
          {data.map(framework => (
            <tr key={framework.id}>
              {/*console.log(framework.first_name)*/}
              {/* el nombre de los campos que vienen a continuacion tienes que ser
              los que nos devuelve el JSON. Fijate en como se llaman cuando te devuelve 
              haciendo una peticion get por la url http://localhost:4008/users/
              [{"id":1,"firstName":"juan","lastName":"Perez"},
              {"id":2,"firstName":"Ana","lastName":"Soria"},
              {"id":3,"firstName":"Luis","lastName":"Rodrigo"},
              {"id":4,"firstName":"Raquel","lastName":"Segovia"}]
  
              
              */}
              <td>{framework.id}</td>
              <td>{framework.comunidad}</td>
              <td>{framework.pzifer}</td>
              <td>{framework.moderna}</td>
              <td>{framework.dosis_administradas}</td>
              <td>{framework.pauta_completa}</td>
              <td>{framework.fecha_ult_vacuna}</td>

              <td>
                <button className="btn btn-primary" onClick={() => seleccionarFramework(framework, "Editar")}>Editar</button>
                <button className="btn btn-danger" onClick={() => seleccionarFramework(framework, "Eliminar")}>Eliminar</button>
              </td>
            </tr>
          ))}


        </tbody>

      </table>


      <Modal isOpen={modalInsertar}>
        <ModalHeader>Insertar Datos de Vacunacion</ModalHeader>
        <ModalBody>
          <div className="form-group">
            <label>Comunidad: </label>
            <br />
            <input type="text" className="form-control" name="comunidad" onChange={handleChange} />
            <br />
            <label>Pzifer: </label>
            <br />
            <input type="text" className="form-control" name="pzifer" onChange={handleChange} />
            <br />
            <label>Moderna: </label>
            <br />
            <input type="text" className="form-control" name="moderna" onChange={handleChange} />
            <br />
            <label>Dosis Administradas: </label>
            <br />
            <input type="text" className="form-control" name="dosis_administradas" onChange={handleChange} />
            <br />
            <label>Pauta Completa: </label>
            <br />
            <input type="text" className="form-control" name="pauta_completa" onChange={handleChange} />
            <br />
            <label>Fecha Ult Vacuna: </label>
            <br />
            <input type="text" className="form-control" name="fecha_ult_vacuna" onChange={handleChange} />
          </div>
        </ModalBody>
        <ModalFooter>

          <button className="btn btn-primary" onClick={() => peticionPost()}>Insertar</button>{"   "}
          <button className="btn btn-danger" onClick={() => abrirCerrarModalInsertar()}>Cancelar</button>
        </ModalFooter>
      </Modal>

      <Modal isOpen={modalEditar}>
        <ModalHeader>Editar Datos de la Vacunación</ModalHeader>
        <ModalBody>
          <div className="form-group">
            <label>Comunidad: </label>
            <br />
            <input type="text" className="form-control" name="comunidad" onChange={handleChange} value={frameworkSeleccionado && frameworkSeleccionado.comunidad} />
            <br />
            <label>Pzifer: </label>
            <br />
            <input type="text" className="form-control" name="pzifer" onChange={handleChange} value={frameworkSeleccionado && frameworkSeleccionado.pzifer} />
            <br />
            <label>Moderna: </label>
            <br />
            <input type="text" className="form-control" name="moderna" onChange={handleChange} value={frameworkSeleccionado && frameworkSeleccionado.moderna} />
            <br />
            <label>Dosis Administradas: </label>
            <br />
            <input type="text" className="form-control" name="dosis_administradas" onChange={handleChange} value={frameworkSeleccionado && frameworkSeleccionado.dosis_administradas} />
            <br />
            <label>Pauta Completa: </label>
            <br />
            <input type="text" className="form-control" name="pauta_completa" onChange={handleChange} value={frameworkSeleccionado && frameworkSeleccionado.pauta_completa} />
            <br />
            <label>Fecha Ult Vacuna: </label>
            <br />
            <input type="text" className="form-control" name="fecha_ult_vacuna" onChange={handleChange} value={frameworkSeleccionado && frameworkSeleccionado.fecha_ult_vacuna} />
            <br />

          </div>
        </ModalBody>
        <ModalFooter>
          <button className="btn btn-primary" onClick={() => peticionPut()}>Modificar</button>{"   "}
          <button className="btn btn-danger" onClick={() => abrirCerrarModalEditar()}>Cancelar</button>
        </ModalFooter>
      </Modal>

      <Modal isOpen={modalEliminar}>
        <ModalBody>
          ¿Estás seguro que deseas eliminar la Comunidad {frameworkSeleccionado && frameworkSeleccionado.comunidad}?
          </ModalBody>
        <ModalFooter>
          <button className="btn btn-danger" onClick={() => peticionDelete()}>
            Sí
            </button>
          <button className="btn btn-secondary" onClick={() => abrirCerrarModalEliminar()} >
            No
            </button>
        </ModalFooter>
      </Modal>

    </div>
  );
}

export default CRUD;