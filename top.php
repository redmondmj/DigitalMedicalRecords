
    <!-- Patient/Visit -->
    <div class="form-row justify-content-center">
        <!-- Select Patient -->
        <div class="form-group">
            <label class="col-12 control-label" for="patientName">Choose Patient:</label>
            <div class="col-12">
                <select id="patientName" name="patientName" class="form-control" onchange="fetch_select(this.value);">
                    <option disabled selected>Choose Patient</option>
                    <option value="1">Asriel Dreemurr</option>
                    <option value="2">Pokey Minch</option>
                    <option value="3">Morrigan Flemeth</option>
                    <option value="4">Copernicus Qwark</option>
                    <option value="5">Albert Wily</option>
                    <option value="6">Betty Kane</option>
                    <option value="7">Jessica Ford</option>
                </select>
            </div>
        </div>

        <!-- Select Visit -->
        <div class="form-group">
            <label class="col-12 control-label" for="visit">Choose Visit:</label>
            <div class="col-12">
                <select id="visit" name="visit" class="form-control">
                    <option value="newVisit">New Visit</option>
                </select>
            </div>
        </div>
    </div>
    <!-- Patient/Visit -->
    <div class="row">
        <label class="col-3 control-label" style="text-align: left;">Full Name:</label>
        <label class="col-3 control-label">Age:</label>
        <label class="col-3 control-label" style="text-align: left;">Village:</label>
        <label class="col-3 control-label">Case #:</label>
    </div>

    <div class="row">
        <div class="col-12" style="height: 1em;"></div>
    </div>

    <div class="row">
        <p class="col-12 control-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mollis interdum sem hendrerit congue. Fusce lectus erat, maximus nec blandit sed, pellentesque sed diam. Ut iaculis viverra bibendum. </p>
    </div>

    <div class="row">
        <div class="col-2">
            <label class="checkbox-inline" for="checkboxes-0">
                <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1" disabled>
                Test
            </label>
        </div>

        <div class="col-2">
            <label class="checkbox-inline" for="checkboxes-1">
            <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2" disabled>
                MED
            </label>
        </div>  

        <div class="col-2">
            <label class="checkbox-inline" for="checkboxes-2">
            <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3" disabled>
                GYN
            </label>
        </div>

        <div class="col-2">
            <label class="checkbox-inline" for="checkboxes-3">
            <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4" disabled>
                OPHT
            </label>
        </div>

        <div class="col-2">
            <label class="checkbox-inline" for="checkboxes-4">
            <input type="checkbox" name="checkboxes" id="checkboxes-4" value="5" disabled>
                DENT
            </label>
        </div>

        <div class="col-2">
            <label class="checkbox-inline" for="checkboxes-5">
            <input type="checkbox" name="checkboxes" id="checkboxes-5" value="6" disabled>
                V
            </label>
        </div>
    </div>