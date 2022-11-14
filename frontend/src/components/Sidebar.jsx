
import listSvg from '../assets/images/list.svg'

function SideBar() {
    return <div className="todo__sidebar">
        <ul className="todo__list">
            <li className='active'>
                <i>
                    <img src={listSvg} alt="📋" />
                </i>
                <span>Все задачи</span>
            </li>
        </ul>
        <ul className="todo__list">
            <li>
                <i className='color-ball'></i>
                <span>Покупки</span>             
            </li>
            <li>
                <i className='color-ball'></i>
                <span>Фронтенд</span>    
            </li>
            <li>
                <i className='color-ball'></i>
                <span>Книги</span>    
            </li>
        </ul>
    </div>
}

export default SideBar