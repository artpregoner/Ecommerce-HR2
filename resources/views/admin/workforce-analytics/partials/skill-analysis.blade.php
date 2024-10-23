<div class="container">
    <div class="ecommerce-widget">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Workforce Analytics</h5>
                    <div class="card-body">
                        <canvas id="workforce-chart" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Skills Distribution</h5>
                    <div class="card-body">
                        <canvas id="skills-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skill Gap Analysis Section -->
    <section class="skill-gap-section">
        <h2>Skill Gap Analysis Tool</h2>
        <form id="skill-gap-form">
            <div class="form-group">
                <label for="department">Department</label>
                <select id="department" name="department">
                    <option value="IT">Finance</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Sales">Sales</option>
                    <option value="Sales">Human Resources</option>
                </select>
            </div>
            <div class="form-group">
                <label for="skill">Skill</label>
                <input type="text" id="skill" name="skill" placeholder="Enter Skill">
            </div>
            <div class="form-group">
                <label for="level">Current Level</label>
                <select id="level" name="level">
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                </select>
            </div>
            <button type="submit" class="btn-analyze">Analyze</button>
        </form>

        <div id="skill-gap-analysis-result">
            <h3>Skill Gap Analysis Result</h3>
            <table>
                <thead>
                    <tr>
                        <th>Skill</th>
                        <th>Current Level</th>
                        <th>Gap</th>
                    </tr>
                </thead>
                <tbody id="result-body">
                    <!-- Analysis result will be inserted here dynamically -->
                </tbody>
            </table>
        </div>
    </section>

    <!-- Recommendations Section -->
    <section class="recommendations-section">
        <h2>Recommendations</h2>
        <ul id="recommendations-list">
            <!-- Recommendations will be generated here -->
        </ul>
    </section>
</div>