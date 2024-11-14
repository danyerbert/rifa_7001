<!-- Modal -->
<div class="modal fade" id="registrarNumero" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Número</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="registrar_numero">
                    <div class="form-group">
                        <label for="numero">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero">
                    </div>
                    <div class="form-group">
                        <label for="observaciones">Jugador (Nombre)</label>
                        <input type="text" class="form-control" id="nombre_jugador" name="nombre_jugador">
                    </div>
                    <div class="form-group">
                        <label for="observaciones">Cedula</label>
                        <input type="text" class="form-control" id="cedula_jugador" name="cedula_jugador">
                    </div>
                    <div class="form-group">
                        <label for="observaciones">Telefono</label>
                        <input type="text" class="form-control" id="telefono_jugador" name="telefono_jugador">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" onclick="registroNumero()" value="Guardar">
                <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Refrescar</button>
            </div>
        </div>
    </div>
</div>